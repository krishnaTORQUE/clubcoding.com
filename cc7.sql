-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 07:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc7`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(20) NOT NULL,
  `contact_date` varchar(99) NOT NULL,
  `contact_name` varchar(999) NOT NULL,
  `contact_email` varchar(999) NOT NULL,
  `contact_msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) NOT NULL,
  `post_date` varchar(99) NOT NULL,
  `post_update` varchar(99) NOT NULL,
  `post_link` varchar(999) NOT NULL,
  `post_title` varchar(999) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_category` varchar(99) NOT NULL,
  `post_description` varchar(200) NOT NULL,
  `post_tags` varchar(99) NOT NULL,
  `post_status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_date`, `post_update`, `post_link`, `post_title`, `post_content`, `post_category`, `post_description`, `post_tags`, `post_status`) VALUES
(1, '13-08-2015 01:34:26pm', '30-11-2016 10:34:23pm', 'prevent-hot-link', 'Prevent direct URL access', '<p>Prevent hot link and direct url access</p>\r\n<div class="syntax">\r\nRewriteEngine on<br/>\r\nRewriteCond%{HTTP_REFERER}!^http://(www\\\\.)?example.com[NC]<br/>\r\nRewriteCond%{HTTP_REFERER}!^http://(www\\\\.)?example.com.*$[NC]<br/>\r\nRewriteRule\\\\.(ttf|ico|bmp|tif|gif|jpg|jpeg|jpe|png|js|css|mp3|mp4)$-[F]\r\n</div>\r\n<br/>\r\n<p>Copy above code and paste into root .htaccess file.</p>\r\n<p>Replace example.com with your domain name.</p>', 'blog', 'prevent hot link and direct url access', 'hot links,url access,prevent url,', ''),
(2, '13-08-2015 05:32:49pm', '15-04-2016 10:37:52pm', 'enable-gzip', 'Enable Gzip Compression', '<div class="syntax">\r\n&lt;ifModulemod_gzip.c&gt;<br/>\r\n    &emsp;mod_gzip_on Yes<br/>\r\n    &emsp;mod_gzip_dechunk Yes<br/>\r\n    &emsp;mod_gzip_item_include file .(html?|txt|css|js|php|pl)$<br/>\r\n    &emsp;mod_gzip_item_include handler ^cgi-script$<br/>\r\n    &emsp;mod_gzip_item_include mime ^text/.*<br/>\r\n    &emsp;mod_gzip_item_include mime ^application/x-javascript.*<br/>\r\n    &emsp;mod_gzip_item_exclude mime ^image/.*<br/>\r\n    &emsp;mod_gzip_item_exclude rspheader ^Content-Encoding:.*gzip.*<br/>\r\n&lt;/ifModulemod_gzip.c&gt;\r\n</div>\r\n<br/>\r\n<p>If the above code is not working use the code below.</p>\r\n\r\n<br/>\r\n<div class="syntax">\r\nAddOutputFilterByTypeDEFLATE text/plain<br/>\r\nAddOutputFilterByTypeDEFLATE text/html<br/>\r\nAddOutputFilterByTypeDEFLATE text/xml<br/>\r\nAddOutputFilterByTypeDEFLATE text/css<br/>\r\nAddOutputFilterByTypeDEFLATE application/xml<br/>\r\nAddOutputFilterByTypeDEFLATE application/xhtml+xml<br/>\r\nAddOutputFilterByTypeDEFLATE application/rss+xml<br/>\r\nAddOutputFilterByTypeDEFLATE application/javascript<br/>\r\nAddOutputFilterByTypeDEFLATE application/x-javascript<br/>\r\n</div>\r\n<br/>\r\n<p>Copy above code and paste into root .htaccess file.</p>', 'blog', 'enable gzip compression by htaccess', 'gzip,compression,htaccess', ''),
(3, '13-08-2015 05:59:30pm', '30-11-2016 10:38:29pm', 'file-caching', 'File Caching', '<p>Client side file caching</p>\r\n<div class="syntax">\r\n&lt;FilesMatch"(?i)^.*\\.(ttf|ico|bmp|tif|gif|jpg|jpeg|jpe|png|js|css|mp3|mp4)$"&gt;<br/>\r\n&emsp;Headerset Cache-Control"max-age=604800"<br/>\r\n&lt;/FilesMatch&gt;\r\n</div>\r\n<br/>\r\n<p>max-age should be in seconds.</p>\r\n<p>Copy above code and paste into root .htaccess file.</p>\r\n<p>Default time is 1 week.</p>', 'blog', 'file caching by htaccess', 'cache,file cache,server cache,htaccess', ''),
(4, '13-08-2015 06:13:59pm', '15-04-2016 10:38:58pm', 'extension-audio-video', 'Extension for Audio and Video', '<div class="syntax">\r\nAddTypeaudio/aac .aac<br/>\r\nAddTypeaudio/mp4 .mp4 .m4a<br/>\r\nAddTypeaudio/mpeg .mp1 .mp2 .mp3 .mpg .mpeg<br/>\r\nAddTypeaudio/ogg .oga .ogg<br/>\r\nAddTypeaudio/wav .wav<br/>\r\nAddTypeaudio/webm .webm<br/>\r\nAddTypevideo/mp4 .mp4 .m4v<br/>\r\nAddTypevideo/ogg .ogv .ogg<br/>\r\nAddTypevideo/mp4 .mp4<br/>\r\nAddTypevideo/mp4 .mov<br/>\r\nAddTypevideo/webm .webm<br/>\r\n</div>\r\n<br/>\r\n<p>Copy above code and paste into root .htaccess file. </p>', 'blog', 'extension for audio video from htaccess', 'audio extension,video extension,htaccess', ''),
(5, '13-08-2015 06:54:11pm', '15-04-2016 10:40:11pm', 'www-redirect', 'www Redirect for SEO', '<h3>Add www</h3>\r\n<div class="syntax">\r\nOptions+FollowSymLinks<br/>\r\nRewriteEngine on<br/>\r\nRewriteCond %{HTTP_HOST} ^example.com$<br/>\r\nRewriteRule (.*) http://www.example.com$1 [R=301]\r\n</div>\r\n<br/><br/>\r\n<h3>Remove www</h3>\r\n<div class="syntax">\r\nRewriteEngine on<br/>\r\nRewriteCond %{HTTP_HOST} ^www.example.com$ [NC]<br/>\r\nRewriteRule ^(.*)$ http://example.com/$1 [R=301,L]\r\n</div>\r\n<br/>\r\n<p>Copy above code and paste into root .htaccess file.</p>\r\n<p>Replace example.com with your domain name.</p>', 'blog', 'redirect to www for seo by htaccess', 'www redirect, seo redirect,htaccess,', ''),
(6, '07-12-2015 02:15:29pm', '03-11-2016 06:37:19pm', 'auto-resize-textarea', 'Auto Resize Textarea', '<p>To make a textarea auto resizable, use the function.</p>\r\n\r\n<h3>HTML</h3>\r\n<div class="syntax">\r\n&lt;textarea class="auto-textarea"&gt;&lt;/textarea&gt;\r\n</div>\r\n<br/><br/>\r\n\r\n<h3>CSS</h3>\r\n<div class="syntax">\r\n&lt;style type="text/css"&gt;<br/>\r\n.auto-textarea{<br/>\r\n&emsp;min-height: 20px; <br/>\r\n&emsp;overflow: hidden;<br/>\r\n&emsp;resize: none;<br/>\r\n&emsp;padding: 4px;<br/>\r\n&emsp;font-size: 14px;<br/>\r\n&emsp;border: 1px solid #000;<br/>\r\n}<br/>\r\n&lt;/style&gt;\r\n</div>\r\n<br/><br/>\r\n\r\n<h3>In Pure Javascript</h3>\r\n<div class="syntax">\r\n&lt;script type="text/javascript"&gt;<br/>\r\nfunction autoResizeTextarea(elem) {<br/>\r\n&emsp;elem.onkeydown = function () {<br/>\r\n&emsp;&emsp;this.style.height = ''auto'';<br/>\r\n&emsp;&emsp;this.style.height = this.scrollHeight + ''px'';<br/>\r\n&emsp;};<br/>\r\n};<br/>\r\nautoResizeTextarea(document.getElementsByClassName(''auto-textarea'')[0]);<br/>\r\n&lt;/script&gt;\r\n</div>\r\n<br/><br/>\r\n\r\n<h3>In Jquery</h3>\r\n<div class="syntax">\r\n&lt;script type="text/javascript"&gt;<br/>\r\n$(''.auto-textarea'').on(''keyup'',function(){<br/>\r\n&emsp;$(this).css(''height'',''auto'');<br/>\r\n&emsp;$(this).height(this.scrollHeight);<br/>\r\n});<br/>\r\n&lt;/script&gt;\r\n</div>\r\n<br/><br/>\r\n<p>Work on any jquery version.</p>\r\n<p>Tested on all major browsers.</p>', 'blog', 'javascript auto resize textarea', 'javascript,auto resize,textarea,jquery', ''),
(7, '26-04-2016 09:52:27pm', '26-04-2016 09:55:21pm', 'back-to-top', 'Back to top scroll', '<p>Back to top animation scroll.</p>\r\n<p>Pure Javascript, no jquery no other library.</p>\r\n<br/>\r\n\r\n<h3>HTML</h3>\r\n<div class="syntax">\r\n&lt;div class="backtotop" title="Back to top"&gt;&#9650;&lt;/div&gt;\r\n</div>\r\n<br/><br/>\r\n\r\n<h3>CSS</h3>\r\n<div class="syntax">\r\n&lt;style type="text/css"&gt;<br/>\r\n.backtotop{<br/>\r\n&emsp;width: 25px;<br/>\r\n&emsp;height: 25px;<br/>\r\n&emsp;left: 25px;<br/>\r\n&emsp;bottom: 25px;<br/>\r\n&emsp;padding: 6px 4px 2px 4px;<br/>\r\n&emsp;position: fixed;<br/>\r\n&emsp;background: #444;<br/>\r\n&emsp;text-align: center;<br/>\r\n&emsp;color: #fff;<br/>\r\n&emsp;cursor: pointer;<br/>\r\n&emsp;display: none;<br/>\r\n&emsp;border-radius: 100% !important;<br/>\r\n}<br/>\r\n&lt;/style&gt;\r\n</div>\r\n<br/><br/>\r\n\r\n<h3>Javascript</h3>\r\n<div class="syntax">\r\n&lt;script type="text/javascript"&gt;<br/>\r\nvar backtotop = document.getElementsByClassName(''backtotop'');<br/>\r\nfor (var i = 0; i < backtotop.length; i++) {<br/>\r\n&emsp;window.addEventListener(''scroll'', function () {<br/>\r\n&emsp;&emsp;var docu_scrolheight = window.pageYOffset;<br/>\r\n&emsp;&emsp;if (docu_scrolheight > 10) {<br/>\r\n&emsp;&emsp;&emsp;backtotop[i].style.display = ''block'';<br/>\r\n&emsp;&emsp;} else {<br/>\r\n&emsp;&emsp;&emsp;backtotop[i].style.display = ''none'';<br/>\r\n&emsp;&emsp;}<br/>\r\n&emsp;}, false);<br/>\r\n}<br/>\r\nbacktotop[i].addEventListener(''click'', function () {<br/>\r\n&emsp;var docu_scroltop = window.pageYOffset;<br/>\r\n&emsp;var setInt = setInterval(function () {<br/>\r\n&emsp;&emsp;if (docu_scroltop <= 0) {<br/>\r\n&emsp;&emsp;&emsp;clearInterval(setInt);<br/>\r\n&emsp;&emsp;} else {<br/>\r\n&emsp;&emsp;&emsp;window.scroll(0, docu_scroltop -= 30);<br/>\r\n&emsp;&emsp;}<br/>\r\n&emsp;}, 10);<br/>\r\n}, false);<br/>\r\n&lt;/script&gt;\r\n</div>\r\n<br/><br/>\r\n\r\n<p>Working in all major browsers.</p>', 'blog', 'back to top javascript animation scroll', 'back to top,javascript scroll,pure javascript,animation scroll', ''),
(8, '02-11-2016 06:43pm', '21-11-2016 06:53pm', 'use-github-cdn', 'Use Github as CDN', '<p>Using Github as CDN is very easy.</p>\r\n<p>Follow those steps below.</p>\r\n<br/>\r\n\r\n<img class="lazy-load-imgs img_respo img_content" data-lazy-load-imgs="-APP-LINK-imgs/github-cdn.png" alt="Github Cdn"/>\r\n\r\n<ol>\r\n    <li>Copy link location (e.g. https://github.com/krishnaTORQUE/FrontEnd/blob/master/FrontEnd-min.css)</li>\r\n    <li>Go to http://rawgit.com/</li>\r\n    <li>Paste the copied link</li>\r\n    <li>Done. You will get CDN Link.</li>\r\n</ol>\r\n<br/>\r\n\r\n<p>Recommend: Use Production CDN Link.</p>\r\n\r\n<br/>\r\n\r\n<div class="msg msg_warn">If repository update, CDN will be update automatic, but it may take time for cache</div>\r\n', 'blog', 'use github as cdn', 'github,cdn,free cdn', ''),
(9, '30-11-2016 09:40:22pm', '14-12-2016 11:50:22pm', 'install-varphp', 'Install varphp', '<p>Installing varphp framework is so easy.</p>\r\n\r\n<ol>\r\n    <li>Go to: https://github.com/krishnaTORQUE/Varphp</li>\r\n    <li>Download or Clone to your localhost.</li>\r\n    <li>Done</li>\r\n</ol>\r\n\r\n<p>Open <span class="code">.htaccess</span> file and set the ROOT & Static Error path.</p>\r\n<p>Create <span class="code">_config.php</span> file in ROOT directory and set configuration.</p>\r\n<br/>\r\n<p style="text-decoration: underline;">Example:</p>\r\n<div class="syntax">\r\nclass _config extends VP\\System\\configure {<br/>\r\n&emsp;function __construct() {<br/>\r\n&emsp;&emsp;parent::__construct();<br/>\r\n&emsp;&emsp;$this->APP[''NAME''] = ''My App'';<br/>\r\n&emsp;}<br/>\r\n}\r\n</div>', 'blog', 'how to install varphp', 'install,varphp,docs,framework', ''),
(10, '30-11-2016 09:40:22pm', '14-12-2016 11:50:22pm', 'update-varphp', 'Update varphp', '<p>Easiest way to update varphp framework </p>\r\n\r\n<ol>\r\n    <li>Go to: https://github.com/krishnaTORQUE/Varphp</li>\r\n    <li>Download or Clone to your localhost.</li>\r\n    <li>Delete <span class="code">__VP</span> directory and <span class="code">index.php</span> file.</li>\r\n    <li>Copy and Paste new <span class="code">__VP</span> directory and <span class="code">index.php</span> file.</li>\r\n    <li>Done</li>\r\n</ol>\r\n\r\n<p>Do not recommend replacing any file or directory.</p>\r\n<p>Always check CHANGELOG.md file before update.</p>\r\n<p>Sometime maybe you need to update <span class="code">.htaccess</span> file. It will be mention on CHANGELOG.md file.</p>', 'blog', 'how to update varphp', 'update,varphp,docs,framework', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
