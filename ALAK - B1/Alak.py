def NewBoard(n):
    board = [0 for i in range(n)]
    return board

def Display(board,n):
    for i in range(0,n):
        if board[i] ==0:
            print(".",end=" ")
        if board[i]==1:
            print("x",end=" ")
        if board[i]==2:
            print("o",end=" ")
    print(sep="/n")
    for i in range(n):
        print(i+1,end=" ")

def Possible(board,n,player,removed,i):
    if i > n or i <= 0:
        return False
    else:
        while i<=n:
            if player==1:
                if board[i-1] == 0 and i not in removed[1]:
                    return True
                else:
                    return False
            if player==2:
                if board[i-1]==0 and i not in removed[0]  :
                    return True
                else:
                    return False

def select(board,n,player,removed):
    print(sep="/n")
    print("Joueur ",player,)
    case=int(input(  "veuillez saisir le numéro d'une case valide : "))
    while Possible(board,n,player,removed,case)== True :
        return case
    while Possible(board,n,player,removed,case)== False:
        print("Joueur ", player, )
        case = int(input("veuillez saisir le numéro d'une case valide : "))
    return case

def captures(board,n,player,removed,i):
    j = i
    removedL=[]
    removedR=[]                                      #mise a jour de removed

    while j < n and board[j] != 0 and board[j] != player:
        removedR.append(j+1)
        j += 1
    else:
        if j < n:
            if board[j] == 0:
                removedR = []

    removed[player - 1]=removedR
    k = i - 2
    while k >= 0 and board[k] != 0 and board[k] != player:
        removedL.append(k+1)
        k -= 1
    else:
        if k >= 0:
            if board[k] == 0:
                removedL = []

    removed[player - 1].extend(removedL)

    # fin de mise a jour board
    for p in removed[player-1]:
        board[p-1]=0
    return removed




def put (board,n,player,removed,i):
    while Possible(board, n, player, removed, i) == True:
        board[i-1]=player
        captures(board,n,player,removed,i)
        return True
def again(board,n,player,removed):
    i=1
    while Possible(board,n,player,removed,i)==False:
        i+=1
        if i>n:
            return False
    else:
        return True


def win(board,n):
    p1=0
    p2=0

    for i in board:
        if i ==1:
            p1+=1
        if i ==2:
            p2+=1
    if p1>p2:
        print("Joueur 1 a gagne")
    if p1<p2:
        print("Joueur 2 a gagne")
    if p1==p2:
        print("Egalite")






def alak (n):

    vboard = NewBoard(n)
    removed = [[], []]
    Display(vboard, n)

    while 0 in vboard:
        player = 1
        if player==1 and again(vboard,n,player,removed)==True:
            i = select(vboard, n, player, removed)
            put(vboard,n,player,removed,i)
            Display(vboard,n)
        player=2
        if player==2 and again(vboard,n,player,removed)==True:
            ii= select(vboard, n, player, removed)
            put(vboard,n,player,removed,ii)
            Display(vboard, n)
        else:
            print(sep="/n")
            win(vboard,n)



