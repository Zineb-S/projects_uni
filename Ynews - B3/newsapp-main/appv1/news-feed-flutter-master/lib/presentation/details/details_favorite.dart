import 'package:flutter/material.dart';
import 'package:news_feed/data/model/article.dart';
import 'package:url_launcher/url_launcher_string.dart';
import 'package:share_plus/share_plus.dart';
import '../../data/variable.dart';
import '../../services/sqlite_service.dart';
import '../../utils/colors.dart';
import '../../utils/common.dart';
import '../../utils/strings.dart';
class DetailsFavorite extends StatelessWidget {
  Article article;
   DetailsFavorite({Key? key,required this.article}) : super(key: key);
  int i = 0;
  @override
  Widget build(BuildContext context) {
    Article a = new Article(
        author: article.author.toString(),
        title: article.title.toString(),
        description: article.description.toString(),
        url: article.url.toString(),
        urlToImage: article.urlToImage.toString(),
        publishedAt: article.publishedAt.toString());
    Widget buttonSection = BottomNavigationBar(
      type: BottomNavigationBarType.fixed,
      selectedItemColor: Colors.white,
      unselectedItemColor: Colors.white.withOpacity(.60),
      selectedFontSize: 14,
      unselectedFontSize: 14,
      currentIndex: 1,
      onTap: (index) => {
        if (index == 0)
          {SqliteService.createItem(a)}
        else if (index == 1)
          { SqliteService.deleteItem(a.url)}
      },
      items: [
        BottomNavigationBarItem(
            icon: Icon(Icons.bookmark_add),
            label: 'Save',
            backgroundColor: Colors.black),
        BottomNavigationBarItem(
            icon: Icon(Icons.bookmark_add_outlined),
            label: 'Unsave',
            backgroundColor: Colors.red)
      ],
    );

    return Scaffold(
        backgroundColor: backgroundColor,
        appBar: AppBar(
          elevation: 7,
          foregroundColor: primaryColor,
          backgroundColor: backgroundColor,
          leading: IconButton(
            icon: const Icon(
              Icons.arrow_back_rounded,
              color: primaryColor,
            ),
            onPressed: () {
              Navigator.pop(context);
            },
          ),
          title: text(text: app_name),

        ),
        body: ListView(
          padding: const EdgeInsets.all(16),
          children: [
            remoteImage(context, article.urlToImage ?? ""),
            const SizedBox(
              height: 10,
            ),
            text(text: article.title ?? "", bold: true, color: primaryColor),
            const SizedBox(
              height: 10,
            ),
            text(
                text: article.author ?? "",
                bold: false,
                color: secondaryColor,
                size: 15),
            const SizedBox(
              height: 50,
            ),
            text(
                text: article.description ?? "",
                bold: false,
                color: secondaryColor,
                size: 13),
            const SizedBox(
              height: 50,
            ),
            ElevatedButton(
              onPressed: () async {
                await canLaunchUrlString(article.url ?? "")
                    ? await launchUrlString(article.url ?? "")
                    : print("Could not launch ${article.url}");
              },
              style: ElevatedButton.styleFrom(
                primary: primaryColor,
                elevation: 1,
                minimumSize: const Size(40, 50),
                shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(3),
                ),
              ),
              child: text(text: open_website, color: Colors.white),
            ),
            ElevatedButton(
              onPressed: () async {
                Share.share('check out this article ${article.url} ', subject: 'Take a look');
              },
              style: ElevatedButton.styleFrom(
                primary: primaryColor,
                elevation: 1,
                minimumSize: const Size(40, 50),
                shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(3),
                ),
              ),
              child: text(text: "Share Article", color: Colors.white),
            ),
          ],
        ),
        bottomNavigationBar: buttonSection);
  }
}
