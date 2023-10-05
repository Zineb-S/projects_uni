import 'dart:core';
import 'package:flutter/cupertino.dart';
import 'package:path/path.dart';
import 'package:sqflite/sqflite.dart';
import '../data/model/article.dart';

class SqliteService{
  static const String databaseName = "database.db";
  static Database? db;

  static Future<Database> initializeDb() async{
    final databasePath = await getDatabasesPath();
    final path = join(databasePath, databaseName);
    print("DB 2 ?????? ");
    return db?? await openDatabase(
        path,
        version: 1,
        onCreate: (Database db, int version) async {
          await createTables(db);
        });
  }

  static Future<void> createTables(Database database) async{
    await database.execute('CREATE TABLE articles(author TEXT, title TEXT,description TEXT,url TEXT,urlToImage TEXT,publishedAt TEXT )');
  }

  static Future<int> createItem(Article article) async {
    final db = await SqliteService.initializeDb();

    final id = await db.insert('Articles', article.toMap(),
        conflictAlgorithm: ConflictAlgorithm.replace);
    return id;
  }
  // Delete an note by id
  static Future<void> deleteItem(String id) async {
    final db = await SqliteService.initializeDb();
    try {
      await db.delete("Articles", where: "url = ?", whereArgs: [id]);
    } catch (err) {
      debugPrint("Something went wrong when deleting an item: $err");
    }
  }
  // Read all notes
  static Future<List<Article>> getItems() async {
    final db = await SqliteService.initializeDb();

    final List<Map<String, Object?>> queryResult = await db.query('Articles');
    return queryResult.map((e) => Article.fromMap(e)).toList();
  }
}