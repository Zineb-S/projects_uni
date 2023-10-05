package com.bex.booking.service;


import com.bex.booking.repository.ResidentRepository;
import com.bex.booking.model.Resident;
import com.mongodb.client.result.UpdateResult;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.mongodb.core.MongoTemplate;
import org.springframework.data.mongodb.core.query.Criteria;
import org.springframework.data.mongodb.core.query.Query;
import org.springframework.data.mongodb.core.query.Update;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class ResidentService {
    @Autowired
    private ResidentRepository residentRepository;
    @Autowired
    private MongoTemplate mongoTemplate;
    public List<Resident> allResidents(){
        return residentRepository.findAll();
    }
    public Optional<Resident> singleResident(Integer id){
        return residentRepository.findResidentByIndex(id);
    }
    public Resident createResident(Integer id ,  String first_name,String last_name,String email,String password ,String phone ,Integer res_total,Integer unit_id){


        return residentRepository.insert(new Resident(id,first_name,last_name,email,password,phone,res_total,unit_id));
    }
    public String updateResident(Integer id ,  String first_name,String last_name,String email,String password ,String phone ,Integer res_total,Integer unit_id){
        Query query = new Query().addCriteria(Criteria.where("index").is(id));
        Update updateFname = new Update().set("first_name",first_name);
        Update updateLname= new Update().set("last_name",last_name);
        Update updateEmail = new Update().set("email",email);
        Update updatePass = new Update().set("password",password);
        Update updatePhone = new Update().set("phone",phone);
        Update updateTotal = new Update().set("res_total",res_total);
        Update updateUnit = new Update().set("unit_id",unit_id);


        UpdateResult result1 = mongoTemplate.updateFirst(query,updateFname,Resident.class);
        UpdateResult result2 = mongoTemplate.updateFirst(query,updateLname,Resident.class);
        UpdateResult result3 = mongoTemplate.updateFirst(query,updateEmail,Resident.class);
        UpdateResult result4 = mongoTemplate.updateFirst(query,updatePass,Resident.class);
        UpdateResult result5 = mongoTemplate.updateFirst(query,updatePhone,Resident.class);
        UpdateResult result6 = mongoTemplate.updateFirst(query,updateTotal,Resident.class);
        UpdateResult result7 = mongoTemplate.updateFirst(query,updateUnit,Resident.class);


        return result1.toString()+result2.toString()+result3.toString()+result4.toString()+result5.toString()+result6.toString()+result7.toString();
    }
    public Optional<Resident> deleteResident(Integer id ){
        return residentRepository.deleteResidentByIndex(id);
    }
}
