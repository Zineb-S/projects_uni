import 'package:flutter/material.dart';
import 'package:news_feed/data/model/article.dart';
import 'package:news_feed/data/model/news.dart';
import 'package:news_feed/presentation/details/details_favorite.dart';
import 'package:news_feed/presentation/home/home_view.dart';
import 'package:news_feed/services/sqlite_service.dart';

import '../../data/variable.dart';
import '../../utils/colors.dart';
import '../../utils/common.dart';
import '../../utils/time_date_converter.dart';
import '../details/details_view.dart';

class FavoriteNews extends StatefulWidget {
  const FavoriteNews({Key? key}) : super(key: key);

  @override
  State<FavoriteNews> createState() => _FavoriteNewsState();
}

class _FavoriteNewsState extends State<FavoriteNews> {
  @override
  Widget build(BuildContext context) {
    print(Variable.currentNavIndex);
    Widget buttonSection = BottomNavigationBar(
      type: BottomNavigationBarType.shifting,
      currentIndex: Variable.currentNavIndex,
      onTap: (index) => setState(() => Variable.currentNavIndex = index),
      items: [
        BottomNavigationBarItem(
            icon: Icon(Icons.newspaper),
            label: 'News',
            backgroundColor: Colors.black),
        BottomNavigationBarItem(
            icon: Icon(Icons.favorite),
            label: 'Favorites',
            backgroundColor: Colors.black)
      ],
    );
    if (Variable.currentNavIndex == 0) {
      return Home();
    }
    if (Variable.currentNavIndex == 1) {
      return Scaffold(
        backgroundColor: Colors.white,
        appBar: AppBar(
          title: Text('Favorite Articles'),
        ),
        body: SafeArea(
          child: ListView(
            children: [
              FutureBuilder<List<Article>>(
                future: SqliteService.getItems(),
                builder: (context, snapshot) {
                  return snapshot.connectionState == ConnectionState.waiting
                      ? const CircularProgressIndicator()
                      : Column(
                          mainAxisAlignment: MainAxisAlignment.center,
                          mainAxisSize: MainAxisSize.min,
                          children: List.generate(
                            snapshot.data!.length,
                            (index) {

                              return GestureDetector(
                                onTap: () =>
                                    Navigator.push(context,
                                        MaterialPageRoute(builder: (BuildContext context) {


                                          return DetailsFavorite(article: snapshot.data![index],);
                                        })),
                                child: Card(
                                  elevation: 4,
                                  shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(7)),
                                  margin: const EdgeInsets.symmetric(
                                      vertical: 7, horizontal: 14),
                                  child: Column(
                                    crossAxisAlignment:
                                        CrossAxisAlignment.start,
                                    children: [
                                      remoteImage(
                                          context,
                                          snapshot.data?[index].urlToImage ??
                                              ""),
                                      const SizedBox(
                                        height: 10,
                                      ),
                                      Padding(
                                        padding: const EdgeInsets.all(10),
                                        child: Column(
                                          crossAxisAlignment:
                                              CrossAxisAlignment.start,
                                          children: [
                                            text(
                                                text: snapshot
                                                        .data?[index].title ??
                                                    "",
                                                bold: true,
                                                color: primaryColor),
                                            const SizedBox(
                                              height: 10,
                                            ),
                                            text(
                                                text: snapshot
                                                        .data?[index].author ??
                                                    "",
                                                bold: false,
                                                color: secondaryColor,
                                                size: 15),
                                            const SizedBox(
                                              height: 10,
                                            ),
                                            matchParentText(
                                                context: context,
                                                text: parseDate(snapshot
                                                        .data?[index]
                                                        .publishedAt ??
                                                    ""),
                                                bold: false,
                                                color: secondaryColor,
                                                size: 13,
                                                align: TextAlign.end),
                                          ],
                                        ),
                                      ),
                                    ],
                                  ),
                                ),
                              );
                            },
                          ),
                        );
                },
              )
            ],
          ),
        ),
        bottomNavigationBar: buttonSection,
      );
    }
    return Text('hi');
  }
}
