SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `cz_adminlog`;
CREATE TABLE `cz_adminlog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('1','175.169.170.232','1531995733','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('2','175.169.170.232','1531995740','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('3','175.169.170.232','1531995777','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('4','175.169.170.232','1531995838','用户17074064000登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('5','175.169.170.232','1531995845','用户17074064000登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('6','175.169.170.232','1531995863','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('7','175.169.170.232','1532058505','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('8','175.169.170.232','1532058619','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('9','175.169.170.232','1532058661','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('10','175.169.170.232','1532087411','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('11','175.169.170.232','1532088978','用户administrator登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('12','175.169.170.232','1532088984','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('13','175.169.170.232','1532089904','用户15141566663登录,用户不存在');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('14','175.169.170.232','1532089914','用户15141566663登录,用户不存在');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('15','113.224.173.231','1532334593','用户administrator登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('16','113.224.173.231','1532334601','用户administrator登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('17','113.224.173.231','1532334605','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('18','175.44.9.185','1532366188','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('19','192.168.31.142','1532411023','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('20','192.168.31.142','1532411028','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('21','192.168.31.142','1532411047','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('22','192.168.31.142','1532411074','用户administrator登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('23','192.168.31.142','1532411097','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('24','192.168.31.142','1532411171','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('25','192.168.31.142','1532411249','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('26','192.168.31.58','1532414652','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('27','192.168.31.58','1532414770','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('28','192.168.31.58','1532414773','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('29','192.168.31.58','1532414777','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('30','192.168.31.58','1532414787','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('31','192.168.31.58','1532416299','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('32','192.168.31.239','1532416582','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('33','192.168.31.239','1532416590','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('34','192.168.31.239','1532416657','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('35','192.168.31.239','1532416675','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('36','192.168.31.239','1532416685','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('37','192.168.31.239','1532416700','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('38','192.168.31.239','1532416721','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('39','192.168.31.239','1532416732','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('40','192.168.31.239','1532416743','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('41','192.168.31.239','1532416752','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('42','192.168.31.239','1532416762','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('43','192.168.31.239','1532416764','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('44','192.168.31.239','1532416766','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('45','192.168.31.239','1532416766','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('46','192.168.31.239','1532416768','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('47','192.168.31.152','1532416770','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('48','192.168.31.152','1532416785','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('49','192.168.31.152','1532416807','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('50','192.168.31.152','1532416825','用户admin登录,密码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('51','192.168.31.152','1532416866','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('52','192.168.31.239','1532416867','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('53','192.168.31.239','1532416884','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('54','192.168.31.239','1532418482','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('55','192.168.31.142','1532419608','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('56','192.168.31.142','1532419612','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('57','192.168.31.239','1532420314','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('58','192.168.31.142','1532420414','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('59','192.168.31.58','1532421810','用户15141566663登录,用户不存在');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('60','192.168.31.58','1532421822','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('61','192.168.31.142','1532423643','用户admin登录,成功登录');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('62','192.168.31.239','1532426491','用户admin登录,验证码错误');
insert into `cz_adminlog`(`id`,`ip_address`,`login_time`,`content`) values('63','192.168.31.239','1532426501','用户admin登录,成功登录');