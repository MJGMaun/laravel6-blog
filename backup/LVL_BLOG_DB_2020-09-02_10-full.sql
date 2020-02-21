/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.38-MariaDB : Database - lvl_blog_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lvl_blog_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lvl_blog_db`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (9,'2014_10_12_000000_create_users_table',1),(10,'2014_10_12_100000_create_password_resets_table',1),(11,'2019_08_19_000000_create_failed_jobs_table',1),(12,'2020_02_03_065002_create_posts_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`excerpt`,`content`,`deleted_at`,`created_at`,`updated_at`) values (1,'Team Liquid CSGO pro Twistzz give a good suggestion on how to fix Krieg','Make the krieg semi-automatic.','<p>CS:GO fans may have known that the the Krieg rifle, also known as the SG-553 has become a very popular gun. The Krieg’s price reduction in October of last year saw a spike in usage. And now, a number of pro players are really sick of it. Some have call fot nerf or adjustment to the gun,  but recently, Twistzz of Team Liquid gave us a good idea.\r\n</p><p>\"Making the krieg semi-automatic at all times would be an interesting way to fix it tbh,\" Twistzz said on twitter. \"No semi-automatic gun in cs yet, I think it should be the first. In my mind this is the only way not to ruin the gun entirely.\"\r\n</p><p><br></p><p align=\"center\" style=\"text-align: center;\"><img src=\"https://i.c5game.com/image/u-5578541665db6a4ba2bcdc.jpg\" style=\"max-width: 100%; width: 567px; height: 645.3px;\" data-size=\"630, 717\" class=\"\"><br></p><p><br></p><p>Apparently, this is a very interesting and maybe useful idea for a couple of pro players immediately expressed their excitement at the idea with both Nathan ‘NBK’ Schmitt and Peter ‘dupreeh’ Rasmussen saying they liked the interesting idea.\r\n</p><p></p><p>Valve hasn\'t revealed any info about the future update to the rifle. But after so many complain, we think Valve will do something about this.\r\n</p><p><br></p>',NULL,NULL,NULL),(2,'Twistzz promises to get WASD tattoo after winning next CSGO major','Team Liquid\'s Russel \"Twistzz\" Van Dulken is feeling quite confident about his Counter-Strike: Global Offensive squad. ','<p>Many fans noticed that the tweet didn\'t say if they won. It said when.&nbsp;</p>\r\n<p>Team Liquid had a disappointing run at the <a title=\"Berlin Major 2019  will be organized by StarLadder and ImbaTV and will take place in Berlin (Mercedes-Benz Arena)\" href=\"https://win.gg/csgo/tournament/Mzc1Mw/sl-major\" target=\"_blank\" rel=\"noopener noreferrer\">2019 StarLadder Berlin Major</a> earlier this month. But Twistzz still seems quite hopeful for the team\'s future, even after the fifth-place finish after rival Astralis knocked Liquid out of the playoffs.</p>\r\n<p>The placement is an outlier in the North American team\'s most recent results. Team Liquid took first place at the Intel Extreme Masters XIV Chicago tournament this past summer, along with ESL One: Cologne, ESL Pro League Season 9, DreamHack Masters Dallas, and Intel Extreme Masters XIV Sydney. With such a dominant run of play in 2019, Twistzz\'s tweet doesn\'t seem like too much of a stretch.&nbsp;</p>\r\n<p>These wins have helped solidify Team Liquid\'s number one spot on HLTV.org\'s listing of the <a href=\"https://www.hltv.org/ranking/teams/2019/september/16\" target=\"_blank\" rel=\"noopener noreferrer\">best CSGO teams</a> in the world. They have 903 points, which is 200 more than second-place team&nbsp;<a title=\"Ast\" href=\"https://win.gg/team/OTc0NQ/ast\" target=\"_blank\" rel=\"noopener noreferrer\">Astralis</a>. These standings are what&nbsp;Nicolai \"<a title=\"Nicolai Reedtz\" href=\"https://win.gg/player/ODE0Nw/dev1ce-device\" target=\"_blank\" rel=\"noopener noreferrer\">dev1ce</a>\" Reedtz referenced when he said that Team Liquid was still the best team in the world, even after Astralis <a href=\"https://win.gg/news/2326/astralis-capture-berlin-major-title-by-defeating-avangar\" target=\"_blank\" rel=\"noopener noreferrer\">took first</a> at the Berlin Major.&nbsp;</p>',NULL,NULL,NULL),(3,'Team Liquid CS:GO player Twistzz shares concerning update on his health','The CS:GO star posted a TwitLonger statement on Sunday, October 21, providing details about his situation, stating that he hoped speaking about it would help to “relieve stress,” as he is men','“I know being extremely stressed can cause pain and damage within the body,” Twistzz said. “I feel the pain inside, it\'s affecting everything negatively, my sleep and just my life over all.”\r\n\r\nTwistzz states that he recently discovered that he was sensitive to a lot of the food he was regularly eating, and says that his stomach is “pretty damaged”. VanDulken believes this is why his body isn’t healing, but is currently taking medicine to try and help with this issue.',NULL,NULL,NULL),(4,'Twistzz: \"Everything is winnable.\"','Envision this -- It’s your 2017 self sitting quietly at your bedroom battlestation, hours into a Major broadcast, and suddenly a faint voice beckons you right outside of your headset.','“Hello?” you ask, “Who’s there…”\r\n\r\n“Remember this day. In two years to the exact minute, a North American roster will be the best team in the world, taking the number one global ranking from an EU Power-house, and maintain an unimaginable streak of premier tournament victories…”\r\n\r\nBefore the ghost-like voice could finish it’s statement, you\'d quickly slap your headset back over your ears, as if you weren’t foolish enough to believe such a silly and unrealistic statement. You quickly shake off the paranormal occurrence and return to your Counter-Strike stream where a group of North American and European viewers argue and troll each other back and forth regarding the current nature of NA CS.\r\n\r\nBut, what if we could explain to you that a silly prophecy came to fruition partially because of one professional fragger’s decision to... hit the gym? And re-evaluate his everyday confidence?\r\n\r\nThis is the story of Team Liquid’s very own, Russel Van Dulken, otherwise known as: Twistzz',NULL,NULL,NULL),(5,'TWISTZZ: \"ASTRALIS IS REALLY GREAT AT MAKING ME FEEL USELESS, I GET ISOLATED SO OFTEN\"','Russel \"Twistzz\" Van Dulken gave us an interview following Liquid\'s survival in their elimination series against FaZe, speaking on topics such as his individual form as of late and his person','The Canadian star commented on the series against FaZe, who made the affair very close despite slow starts on Mirage and Nuke, with Twistzz noting that Liquid were surprised by how differently Nikola \"NiKo\" Kovač & co. played on the former map in particular.',NULL,NULL,NULL),(6,'CLG Red Emy accuses Twistzz of cheating on her!','Counter-Strike: Global Offensive player, Emma \"Emy\" Choe, accused former boyfriend, Russel \"Twistzz\" Van Dulken, of cheating. She took to social media to address the issue.','The BLAST Premier Spring Series 2020 kicked off this weekend with the world’s top teams competing for a piece of the coveted $300,000 prize pool. While Team Liquid’s Russel “Twistzz” Van Dulken matched up against FaZe in a BO3, his ex-girlfriend Emma “Emy” Choe took to social media accusing him of being unfaithful to her. :(\r\n\r\n\r\nPlay Video\r\nTwistzz and Emy\r\nThe pair began dating almost two years ago in 2018, and were one of the most beloved couples in CSGO. Both being competitive CSGO players in the public eye, it seemed like the two made a good fit for each other.\r\n\r\n\r\nCLG emy\r\n✔\r\n@EmyyCSGO\r\nour first date a year ago ???? we look so smol\r\n\r\nView image on Twitter\r\n668\r\n6:15 AM - Aug 13, 2019\r\nTwitter Ads info and privacy\r\n24 people are talking about this\r\nHowever, recent posts from Emy beginning in late December hinted their relationship had ended. Besides that, they both removed each other’s handles from their bio section.\r\n\r\n\r\nCLG emy\r\n✔\r\n@EmyyCSGO\r\nLife goes on.\r\n\r\n140\r\n9:02 AM - Dec 31, 2019\r\nTwitter Ads info and privacy\r\nSee CLG emy\'s other Tweets\r\nNeither player officially announced the end of their relationship. Twistzz hadn’t commented at all and was relatively quiet on social media.\r\n\r\nThe tipping point\r\nAt the start of BLAST, footage of Twistzz and ESL Marketing Manager Carolin “Aonir” Hanisch holding hands from the organization’s live stream began circulating .\r\n\r\n\r\nSteveMVz\r\n@SteveMVz\r\nReplying to @Twistzz\r\nSo what was this then? Lmao\r\n\r\nEmbedded video\r\n116\r\n5:56 AM - Feb 3, 2020\r\nTwitter Ads info and privacy\r\n17 people are talking about this\r\nThe clip came as a surprise to many. Auguste “Semmler” Massonnat, famous CSGO caster, gasped as Twistzz attempted to hold Aonir’s hand.\r\n\r\nExact details surrounding Emy and Twistzz break up aren’t public. Therefore, it’s irresponsible to suggest the video is evidence that Twistzz had been unfaithful. As far as anyone could tell, the couple hadn’t been together for at least a month.\r\n\r\nEmy’s tweets imply a few situations. The first situation being Twistzz cheated on Emy with Aonir sometime ago, and it’s the reason they broke up. Secondly, the couple attempted to rekindle their relationship, and during this period, Emy found Twistzz had committed to someone else.\r\n\r\nTwistzz opens up\r\nShortly after Emy’s tweets (now deleted), Twistzz defended himself through Twitter:\r\n\r\nTwistzz denies Emy\'s accusations.\r\nMany ran to the player’s side during the exchange. Owen “smooya” Butterfield, CSGO player for Chaos EC, took to his colleague’s defense and commented on the situation:\r\n\r\n\r\nTwistzz’s mom, Julie Will, also got involved.\r\n\r\nTwistzz\'s mother comments on his ex-girlfriend.\r\nThe aftermath\r\nEmy is aware of the mess the duo created for themselves. Despite this, she followed up by announcing she has “screenshots.” Adding fuel to the flame, she implies that she’s willing to release the evidence she reportedly has against the CSGO player.\r\n\r\nTwistzz former girlfriend says she has screenshots of his cheating.\r\nEmy and Twistzz have since deleted all tweets regarding the situation. As of today, neither side have released further statements. During this time, Aonir remained silent',NULL,NULL,'2020-02-06 09:09:39'),(7,'Hello','Short info','Content here','2020-02-06 12:54:24','2020-02-06 12:54:18','2020-02-06 12:54:24');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
