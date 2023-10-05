import 'dart:core';
import 'package:json_annotation/json_annotation.dart';
part 'news.g.dart';


@JsonSerializable()
class News {
  String? author = "";
  String? title = "";
  String? description = "";
  String? url = "";
  String? urlToImage = "";
  String? publishedAt = "";

  News();

  Map<String, dynamic> toMap() {
    return {
      'author': author,
      'title': title,
      'description': description,
      'url': url,
      'urlToImage': urlToImage,
      'publishedAt': publishedAt,

    };
  }
  factory News.fromJson(Map<String, dynamic> json) => _$NewsFromJson(json);
  Map<String, dynamic> toJson() => _$NewsToJson(this);
}