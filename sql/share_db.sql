#分享表
DROP TABLE IF EXISTS share_tb;
CREATE TABLE share_tb (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  expire_time varchar(255)   COMMENT 'access_token/jsapi_ticket',
  code varchar(500) COMMENT 'expire_time',
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COMMENT='分享表';

insert into share_tb (id,expire_time,code) values (1,1,1);
insert into share_tb (id,expire_time,code) values (2,2,2);