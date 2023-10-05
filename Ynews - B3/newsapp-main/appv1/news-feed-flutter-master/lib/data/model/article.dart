import 'dart:core';

class ArticleColumn {
  static final List<String> values = [
    /// Add all fields
     author, title, description, url, urlToImage, publishedAt
  ];

  static const String author = 'author';
  static const String title = 'title';
  static const String description = 'description';
  static const String url = 'url';
  static const String urlToImage = 'urlToImage';
  static const String publishedAt = 'publishedAt';
}

class Article {
  late String author;
  late String title;
  late String description;
  late String url;
  late String urlToImage;
  late String publishedAt;

  Article(
      {
      required this.author,
      required this.title,
      required this.description,
      required this.url,
      required this.urlToImage,
      required this.publishedAt});

  Article.fromMap(Map<String, dynamic> item)
      :
        author = item[ArticleColumn.author],
        title = item[ArticleColumn.title],
        description = item[ArticleColumn.description],
        url = item[ArticleColumn.url],
        urlToImage = item[ArticleColumn.urlToImage],
        publishedAt = item[ArticleColumn.publishedAt];

  Map<String, Object> toMap() {
    return {
      ArticleColumn.author: author,
      ArticleColumn.title: title,
      ArticleColumn.description: description,
      ArticleColumn.url: url,
      ArticleColumn.urlToImage: urlToImage,
      ArticleColumn.publishedAt: publishedAt
    };
  }
}
