package com.risto.ristomanager.entities;

import java.util.ArrayList;
import com.risto.ristomanager.frames.SQLHandler;

public class Product {

    private int productID;
    private String productCategory;
    private String productName;
    private int productPrice;
    private boolean productStatus;
    private String productPicture;
    public int productCount;

    public int getProductID() {
        return productID;
    }

    public void setProductID(int productID) {
        this.productID = productID;
    }

    public int getProductPrice() {
        return productPrice;
    }

    public void setProductPrice(int productPrice) {
        this.productPrice = productPrice;
    }

    public String getProductName() {
        return productName;
    }

    public void setProductName(String productName) {
        this.productName = productName;
    }

    public String getProductPicture() {
        return productPicture;
    }

    public void setProductPicture(String productPicture) {
        this.productPicture = productPicture;
    }

    public String getProductCategory() {
        return productCategory;
    }

    public void setProductCategory(String productCategory) {
        this.productCategory = productCategory;
    }

    public boolean getProductStatus() {
        return productStatus;
    }

    public void setProductStatus(boolean productStatus) {
        this.productStatus = productStatus;
    }

    public int getProductCount() {
        return productCount;
    }

    public void setProductCount(int productCount) {
        this.productCount = productCount;
    }

    public Product() {
    }

    public Product(int productID, String productCategory, String productName, int productPrice, String productPicture, int productCount) { //,boolean productStatus

        this.productID = productID;
        this.productCategory = productCategory;
        this.productName = productName;
        this.productPrice = productPrice;
        this.productPicture = productPicture;
        //this.productStatus=productStatus;
        this.productCount = productCount;
    }

    public static void importProducts(ArrayList<Product> productsList) {

        try {
            SQLHandler.select("SELECT * FROM products");

            if (productsList.size() > 0) {
                productsList.clear();
            }

            while (SQLHandler.resultSet.next()) {
                Product newProduct = new Product();
                newProduct.setProductID(SQLHandler.resultSet.getInt("Product_ID"));
                newProduct.setProductCategory(SQLHandler.resultSet.getString("Product_Category"));
                newProduct.setProductName(SQLHandler.resultSet.getString("Product_Name"));
                newProduct.setProductPrice(SQLHandler.resultSet.getInt("Product_Price"));
                newProduct.setProductPicture(SQLHandler.resultSet.getString("Product_Picture"));
                newProduct.setProductCount(0);
                productsList.add(newProduct);
            }
            SQLHandler.connection.close();

        } catch (Exception e) {
            System.out.println("Error While Importing Products : " + e.getMessage());
        }

    }

}
