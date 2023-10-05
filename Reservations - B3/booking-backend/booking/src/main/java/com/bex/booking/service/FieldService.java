package com.bex.booking.service;

import com.bex.booking.model.Field;
import com.bex.booking.repository.FieldRepository;
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
public class FieldService {
    @Autowired
    private FieldRepository fieldRepository;
    @Autowired
    private MongoTemplate mongoTemplate;
    public List<Field> allFields(){
        return fieldRepository.findAll();
    }
    public Optional<Field> singleField(Integer id){
        return fieldRepository.findFieldByIndex(id);
    }
    public Field createField(Integer id ,  String type,Integer fee){


        return fieldRepository.insert(new Field(id,type,fee));
    }
    public String updateField(Integer id ,  String type,Integer fee){
        Query query = new Query().addCriteria(Criteria.where("index").is(id));
        Update updateType = new Update().set("type",type);
        Update updateFee= new Update().set("fee",fee);


        UpdateResult result1 = mongoTemplate.updateFirst(query,updateType,Field.class);
        UpdateResult result2 = mongoTemplate.updateFirst(query,updateFee,Field.class);



        return result1.toString()+result2.toString();
    }
    public Optional<Field> deleteField(Integer id ){
        return fieldRepository.deleteFieldByIndex(id);
    }
}
