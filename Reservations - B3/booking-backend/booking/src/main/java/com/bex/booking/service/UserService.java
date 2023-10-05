package com.bex.booking.service;


import com.bex.booking.model.Role;
import com.bex.booking.repository.UserRepository;
import com.bex.booking.model.User;
import com.mongodb.client.result.UpdateResult;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
import org.springframework.data.mongodb.core.MongoTemplate;
import org.springframework.data.mongodb.core.query.Criteria;
import org.springframework.data.mongodb.core.query.Query;
import org.springframework.data.mongodb.core.query.Update;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;
import java.util.Set;

@Service
public class UserService {

    @Autowired
    private UserRepository userRepository;
    @Autowired
    private MongoTemplate mongoTemplate;
    public List<User> allUsers(){
        return userRepository.findAll();
    }
    public Optional<User> singleUser(Integer id){
        return userRepository.findUserByIndex(id);
    }
    public User createUser(Integer id, String username, String first_name, String last_name, String email, String password , String phone , Integer res_total){


        return userRepository.insert(new User(id,username,first_name,last_name,email,password,phone,res_total));
    }
    public String updateUser(Integer id ,String first_name,String last_name,String email,String password ,String phone ,Integer res_total){
        Query query = new Query().addCriteria(Criteria.where("index").is(id));
        Update updateFname = new Update().set("first_name",first_name);
        Update updateLname= new Update().set("last_name",last_name);
        Update updateEmail = new Update().set("email",email);
        Update updatePass = new Update().set("password",password);
        Update updatePhone = new Update().set("phone",phone);
        Update updateTotal = new Update().set("res_total",res_total);

        UpdateResult result1 = mongoTemplate.updateFirst(query,updateFname,User.class);
        UpdateResult result2 = mongoTemplate.updateFirst(query,updateLname,User.class);
        UpdateResult result3 = mongoTemplate.updateFirst(query,updateEmail,User.class);
        UpdateResult result4 = mongoTemplate.updateFirst(query,updatePass,User.class);
        UpdateResult result5 = mongoTemplate.updateFirst(query,updatePhone,User.class);
        UpdateResult result6 = mongoTemplate.updateFirst(query,updateTotal,User.class);


        return result1.toString()+result2.toString()+result3.toString()+result4.toString()+result5.toString()+result6.toString();
    }
    public Optional<User> deleteUser(Integer id ){
        return userRepository.deleteUserByIndex(id);
    }

    public int getNextAvailableIndex() {
        Pageable topOne = PageRequest.of(0, 1);
        List<User> users = userRepository.findAllUsersOrderByIndexDesc(topOne);

        if (users.isEmpty()) {
            return 1; // Set the default index value if no users are found
        }

        return users.get(0).getIndex() + 1;
    }

}
