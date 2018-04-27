-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2018 г., 20:35
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `umbrella`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `ip` text NOT NULL,
  `reserved` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `title`, `description`, `link`, `ip`, `reserved`) VALUES
('1', 'satohit.com', 'satohit.com', 'https://satohit.com/', '1.1.1.1', 'comment'),
('1', 'Announcing funding for 10 Development Data Innovation ...', 'In July of 2016, the Global Partnership for Sustainable Development Data (GPSDD), announced a new multi-million dollar funding initiative to support collaborative data innovations for sustainable development.', 'https://blogs.worldbank.org/opendata/announcing-funding-10-development-data-innovation-projects', '1.1.1.1', 'comment'),
('1', 'TXX.WIN', '如果您看到这篇文章,表示您的 blog 已经安装成功.', 'https://www.txx.win/', '1.1.1.1', 'comment'),
('1', 'Roberto Waack | World Bank Blogs', 'Founding member and Chairman of the Board of Amata S.A. Roberto Waack is a founding member and Chairman of the Board of Amata S.A., a Brazilian forestry company. Board member of GRI - Global Reporting Initiative, Ethos Institute, IBGC – Brazilian Institute of Corporate Governance and WWF-Brazil ...', 'https://blogs.worldbank.org/team/roberto-waack', '1.1.1.1', 'comment'),
('1', '欢迎来到NiCoNiCo！ - nicokun.com', '请输入网址 [] 加密网址; 加密页面; 允许 Cookies; 删除脚本; 主页; 编辑浏览器; 管理Cookies', 'http://www.nicokun.com/dm/', '1.1.1.1', 'comment'),
('1', 'ByXiaoXie', '1、主键约束（primary key）：一个表中唯一具有标识性的字段，一般一个表中只能有一个主键。设置了主键的字段，该字段的值不重复。', 'http://www.byxiaoxie.com/', '1.1.1.1', 'comment'),
('1', '防劫持CDN|高防CDN|TCP加速|TS加速|cdn防御|免备案cdn|高防DNS|香港cdn加速|国内免备案 ...', '本网站专业提供国外国内免备案高防cdn加速服务,网防cdn自主研发智能cdn系统,防御一切DDOS/CC攻击,负载均衡,开通即用,隐藏源ip,让网站实现完美的加速体验-JGDUN|金刚盾,日本CDN，香港CDN，马来西亚，香港CDNDNS服务商,专注于网站安全,防御各类DDoS攻击,CC攻击,隐藏IP ...', 'https://www.jgdun.com/', '1.1.1.1', 'comment'),
('1', '现代 - 甜梦文库_甜梦书库 - emmacn.com', '做一个识时务的网站,甜梦粉丝必看！ [青春励志]三十岁之后，我还要当自己 [青春励志]乐嘉：写给15岁的女儿的信', 'http://www.emmacn.com/xd/', '1.1.1.1', 'comment'),
('1', 'aqber.com - 信息安全实验室', '信息安全室隶属中国海洋大学信息科学与工程学院和国家保密学院，依托网络与信息安全教研室，致力于信息安全防护与评价及信息保密等领域的理论与技术研究、信息安全系统与产品的研发和信息安全专业人才的培养，满足国家和行业的信息安全需求。', 'http://www.aqber.com/', '1.1.1.1', 'comment'),
('1', '腾讯TencentOS官方论坛 - bbs.tos.cn', '腾讯TencentOS社区是一个为TencentOS用户提供，TencentOS使用交流，TencentOS问题反馈，TencentOS历史版本更新等交流互动的平台。', 'http://bbs.tos.cn/', '1.1.1.1', 'comment'),
('1', '其他手机版 - m.emmacn.com', '做一个识时务的网站,甜梦粉丝必看！ [因果故事]家难未必不幸 [因果故事]得财未必是福 [婚姻感悟]一个聪明女人的嫁人经验,很实在很', 'http://m.emmacn.com/ot/', '1.1.1.1', 'comment'),
('1', '【TOS资源组】赛风VPN--------毫不费力的翻墙神器 - 腾讯TencentOS官方论坛', '腾讯TencentOS社区是一个为TencentOS用户提供，TencentOS使用交流，TencentOS问题反馈，TencentOS历史版本更新等交流互动的平台。', 'http://bbs.tos.cn/thread-201885-1-1.html', '1.1.1.1', 'comment'),
('1', 'gc', 'gc. 海纳百川 有容乃大 . Blog; Instagram; Wechat; QQ; ©gc; 2018', 'https://www.gc888.cn/', '1.1.1.1', 'comment'),
('1', '甜梦-梦之国度手机版 - m.emmacn.com', '请牢记本站备用域名zoekoo.com 甜梦文库手机版域名：m.emmacn.com', 'http://m.emmacn.com/', '1.1.1.1', 'comment'),
('1', 'Letou', 'Sorry - 當前地區不允許訪問. 您的IP来自： ，如有任何疑问请发邮件到 [email protected]', 'http://www.lt199.com/', '1.1.1.1', 'comment'),
('1', 'htscwqj.com', 'htscwqj.com', 'http://htscwqj.com/', '1.1.1.1', 'comment'),
('1', 'gc', 'gc. 海纳百川 有容乃大 . Blog; Instagram; Wechat; QQ ©gc 2018', 'http://www.gc888.cn/', '1.1.1.1', 'comment'),
('1', 'NiCoNiCo', '”NiCoNiCo在线里番观看,请不要下载视频资源！”', 'http://www.nicokun.com/', '1.1.1.1', 'comment');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
