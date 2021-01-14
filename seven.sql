-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2021 at 03:37 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevenjam_stock`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `auther` (IN `s` VARCHAR(50), IN `page` INT(5))  Begin
Select auther_id,auther_name from auther where auther_id like s or auther_name like s order by auther_name ASC LIMIT page,15;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `auther_count` (IN `s` VARCHAR(50))  NO SQL
Begin
Select auther_id,auther_name from auther where auther_id like s or auther_name like s order by auther_name ASC;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `brand` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select brand_id,brand_name from brand where brand_id like s or brand_name like s order by brand_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `brand_count` (IN `s` VARCHAR(50))  NO SQL
begin
select brand_id,brand_name from brand where brand_id like s or brand_name like s order by brand_name ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `category` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select cate_id,cate_name from category where cate_id like s or cate_name like s order by cate_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `category_count` (IN `s` VARCHAR(50))  NO SQL
begin
select cate_id,cate_name from category where cate_id like s or cate_name like s order by cate_name ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `customer` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select c.cus_id,company,tel,address,email,c.stt_id,stt_name from customer c left join customer_status cs on c.stt_id=cs.stt_id where c.cus_id like s or company like s or tel like s or address like s or email like s or c.stt_id like s or stt_name like s order by company ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `customer_count` (IN `s` VARCHAR(50))  NO SQL
begin
select c.cus_id,company,tel,address,email,c.stt_id,stt_name from customer c left join customer_status cs on c.stt_id=cs.stt_id where c.cus_id like s or company like s or tel like s or address like s or email like s or c.stt_id like s or stt_name like s order by company ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `customer_status` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select stt_id,stt_name from customer_status where stt_id like s or stt_name like s ORDER by stt_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `customer_status_count` (IN `s` VARCHAR(50))  NO SQL
begin
select stt_id,stt_name from customer_status where stt_id like s or stt_name like s ORDER by stt_name ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_auther` (`autherid` VARCHAR(20))  Begin
Delete from  auther  where auther_id=autherid;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_brand` (IN `id` INT(11))  begin
Delete from brand where brand_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_category` (`id` INT(11))  begin
Delete from category where cate_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_customer` (`id` VARCHAR(20))  begin
Delete from customer where cus_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_customer_status` (`id` VARCHAR(20))  begin
Delete from customer_status where stt_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_employee` (`empid` VARCHAR(20))  Begin
Delete from  employee  where emp_id=empid;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_form` (`id` VARCHAR(20))  begin
Delete from form where form_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_products` (`id` INT(11))  begin
Delete from products where code=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_product_addr` (IN `id` INT(11))  begin
Delete from product_addr where pro_ad=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_rate` (IN `id` VARCHAR(20))  begin
Delete from rate where rate_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_spare_part` (IN `spid` INT(11))  begin
Delete from spare_part where id=spid;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_supplier` (`id` VARCHAR(20))  begin
Delete from supplier where sup_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `delete_unit` (`id` INT(11))  begin
delete from unit where unit_id=id;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `distribute` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select id,d.code,serial,d.emp_id,d.form_id,dis_date,emp_name,pro_name,gen,stt_accept,status,c.company from distribute d left join products p on d.code=p.code left join employee e on d.emp_id=e.emp_id left join form f on d.form_id=f.form_id left join customer c on f.cus_id=c.cus_id WHERE id like s or d.code like s or serial like s or d.emp_id like s or d.form_id like s or dis_date like s or emp_name like s or pro_name like s or gen like s or stt_accept like s or emp_name like s or status like s or c.company like s order by d.code ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `employee` (IN `s` VARCHAR(250), IN `page` INT(5))  Begin
select emp_id,emp_name,emp_surname,gender,tel,address,email,pass,e.auther_id,auther_name,e.stt_id,stt_name,img_path from employee e left join auther a on e.auther_id=a.auther_id left join emp_status s on e.stt_id=s.stt_id where emp_id like s or emp_name like s or emp_surname like s or gender like s or address like s or email like s or auther_name like s or stt_name like s order by emp_name ASC limit page,15;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `employee_count` (IN `s` VARCHAR(50))  NO SQL
Begin
select emp_id,emp_name,emp_surname,gender,tel,address,email,pass,e.auther_id,auther_name,e.stt_id,stt_name,img_path from employee e left join auther a on e.auther_id=a.auther_id left join emp_status s on e.stt_id=s.stt_id where emp_id like s or emp_name like s or emp_surname like s or gender like s or address like s or email like s or auther_name like s or stt_name like s order by emp_name ASC;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `form` (IN `page` INT(5))  begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where stt_accept='ຍັງບໍ່ອະນຸມັດ' order by form_date DESC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `form2` (IN `s` VARCHAR(50), IN `page` INT(5), IN `emp` VARCHAR(20))  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where f.form_id like s or f.emp_id like s or f.cus_id like s or form_date like s or stt_accept like s or amount like s or STATUS like s or usr_acc like s or emp_name like s or company like s or packing_no like s or fd.code like s or p.img_path like s or form_time like s and f.emp_id=emp group by f.form_id order by form_date DESC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `form2_count` (IN `s` VARCHAR(50), IN `emp` INT(20))  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where f.form_id like s or f.emp_id like s or f.cus_id like s or form_date like s or stt_accept like s or amount like s or STATUS like s or usr_acc like s or emp_name like s or company like s or packing_no like s or fd.code like s or p.img_path like s or form_time like s and f.emp_id=emp GROUP by f.form_id order by form_date DESC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `form_count` ()  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where stt_accept='ຍັງບໍ່ອະນຸມັດ' order by form_date DESC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `form_detail` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select id,fd.code,pro_name,unit_name,cate_name,brand_name,f.form_date,f.form_time,f.stt_accept,f.emp_id,emp_name,f.cus_id,company,packing_no,gen,qty,fd.form_id,p.img_path from formdetail fd left join form f on fd.form_id=f.form_id left join products p on fd.code=p.code left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join customer cs on f.cus_id=cs.cus_id left join employee em on f.emp_id=em.emp_id where (fd.code like s or fd.form_id like s or company like s or emp_name like s) and stt_accept='ອະນຸມັດ' order by f.form_date ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `form_detail_count` (IN `s` VARCHAR(50))  NO SQL
begin
select id,fd.code,pro_name,unit_name,cate_name,brand_name,f.form_date,f.form_time,f.stt_accept,f.emp_id,emp_name,f.cus_id,company,packing_no,qty,fd.form_id from formdetail fd left join form f on fd.form_id=f.form_id left join products p on fd.code=p.code left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join customer cs on f.cus_id=cs.cus_id left join employee em on f.emp_id=em.emp_id where (fd.code like s or fd.form_id like s or company like s or emp_name like s) and stt_accept='ອະນຸມັດ' order by f.form_date ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_auther` (`autherid` VARCHAR(20), `authername` VARCHAR(50))  Begin
Insert into auther values(autherid,authername);
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_brand` (`brand_name` VARCHAR(50))  begin
insert into brand(brand_name) values(brand_name);
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_category` (`cate_name` VARCHAR(50))  begin
Insert into category (cate_name) values(cate_name);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_check_stock` (`code` VARCHAR(30), `serial` VARCHAR(30), `qty` INT(11), `emp_id` VARCHAR(20), `check_date` DATE, `check_time` TIME, `pro_ad` INT(11), `remark` VARCHAR(100))  begin
insert into check_stock (code,serial,qty,emp_id,check_date,check_time,pro_ad,remark) values(code,serial,qty,emp_id,check_date,check_time,pro_ad,remark);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_customer` (`cus_id` VARCHAR(20), `company` VARCHAR(50), `tel` VARCHAR(30), `address` VARCHAR(250), `email` VARCHAR(100), `stt_id` VARCHAR(20))  begin
Insert into customer values(cus_id,company,tel,address,email,stt_id);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_customer_status` (`sst_id` VARCHAR(20), `stt_name` VARCHAR(50))  begin
Insert into customer_status values(sst_id,stt_name);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_distribute` (IN `code` VARCHAR(30), IN `serial` VARCHAR(30), IN `qty` INT(11), IN `emp_id` VARCHAR(20), IN `form_id` INT(11), IN `dis_date` DATE, IN `dis_time` TIME, IN `remark` VARCHAR(100))  begin
insert into distribute (code,serial,qty,emp_id,form_id,dis_date,dis_time,remark) values(code,serial,qty,emp_id,form_id,dis_date,dis_time,remark);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_employee` (IN `empid` VARCHAR(20), IN `name` VARCHAR(50), IN `surname` VARCHAR(50), IN `gender` VARCHAR(10), IN `tel` VARCHAR(30), IN `address` VARCHAR(250), IN `email` VARCHAR(100), IN `pass` VARCHAR(100), IN `autherid` VARCHAR(20), IN `sttid` INT, IN `imgpath` VARCHAR(50))  Begin
Insert into employee values(empid,name,surname,gender,tel,address,email,md5(pass),autherid,sttid,imgpath);
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_form` (IN `form_id` INT(11), IN `emp_id` VARCHAR(20), IN `cus_id` VARCHAR(20), IN `amount` DECIMAL(11,2), IN `packing` INT(11), IN `form_date` DATE, IN `form_time` TIME, IN `stt_accept` VARCHAR(50), IN `status` VARCHAR(50), IN `usr_acc` VARCHAR(50))  begin
Insert into form values(form_id,emp_id,cus_id,amount,packing,form_date,form_time,stt_accept,status,usr_acc);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_form_detail` (IN `code` VARCHAR(30), IN `qty` INT(11), IN `form_id` INT(11))  begin
insert into formdetail (code,qty,form_id) values(code,qty,form_id);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_products` (`code` VARCHAR(30), `pro_name` VARCHAR(50), `gen` VARCHAR(50), `cate_id` INT(11), `unit_id` INT(11), `brand_id` INT(11), `qtyalert` INT(11), `img_path` VARCHAR(50))  begin
Insert into products values(code,pro_name,gen,cate_id,unit_id,brand_id,qtyalert,img_path);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_product_addr` (`addr_name` VARCHAR(50))  begin
insert into product_addr(addr_name) values(addr_name);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_product_putback_stock` (IN `code` VARCHAR(30), IN `serial` VARCHAR(30), IN `qty` INT(11), IN `emp_id` VARCHAR(20), IN `form_id` INT(11), IN `date_back` DATE, IN `time_back` TIME, IN `remark` VARCHAR(100))  begin
insert into product_putback_stock (code,serial,qty,emp_id,form_id,date_back,time_back,remark) values(code,serial,qty,emp_id,form_id,date_back,time_back,remark);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_rate` (`rate_id` VARCHAR(20), `rate_buy` DECIMAL(11,2), `rate_sell` DECIMAL(11,2))  begin
insert into rate values(rate_id,rate_buy,rate_sell);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_spare_part` (`emp_id` VARCHAR(20), `code` VARCHAR(30), `serial` VARCHAR(30), `spare_part` VARCHAR(50), `pro_id` VARCHAR(30), `pro_serial` VARCHAR(30), `spare_date` DATE, `spare_time` TIME, `remark` VARCHAR(100))  begin
insert into spare_part(emp_id,code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark) values(emp_id,code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_stocks` (`code` VARCHAR(30), `serial` VARCHAR(30), `qty` INT(11), `price` DECIMAL(11,2), `dnv` VARCHAR(10), `imp_no` VARCHAR(10), `imp_date` DATE, `imp_time` TIME, `pro_no` VARCHAR(5), `rate_id` VARCHAR(20), `rate` DECIMAL(11,2), `emp_id` VARCHAR(20), `sup_id` VARCHAR(20), `remark` VARCHAR(100))  begin
Insert into stocks (code,serial,qty,price,dnv,imp_no,imp_date,imp_time,pro_no,rate_id,rate,emp_id,sup_id,remark) values(code,serial,qty,price,dnv,imp_no,imp_date,imp_time,pro_no,rate_id,rate,emp_id,sup_id,remark);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_supplier` (`sup_id` VARCHAR(20), `company` VARCHAR(50), `tel` VARCHAR(30), `fax` VARCHAR(30), `address` VARCHAR(250), `email` VARCHAR(100), `img_path` VARCHAR(50))  begin
Insert into supplier values(sup_id,company,tel,fax,address,email,img_path);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `insert_unit` (IN `unit_name` VARCHAR(50))  begin
Insert into unit (unit_name) values(unit_name);
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `products` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,cate_name,unit_name,brand_name,qtyalert,p.img_path from products p left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s order by pro_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `products2` (IN `s` VARCHAR(50), IN `page` INT(5))  NO SQL
begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,SUM(s.qty) as qty,cate_name,unit_name,brand_name,qtyalert,p.img_path from products p left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join stocks s on p.code=s.code where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s GROUP BY s.code order by pro_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `products2_count` (IN `s` VARCHAR(50))  NO SQL
begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,SUM(s.qty) as qty,cate_name,unit_name,brand_name,qtyalert,p.img_path from products p left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join stocks s on p.code=s.code where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s GROUP BY s.code order by pro_name;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `products_count` (IN `s` VARCHAR(50))  NO SQL
begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,cate_name,unit_name,brand_name,serial,qty,price from products p left join stocks sk on p.code=sk.code left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s or serial like s or qty like s or price like s order by pro_name ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `product_addr` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select pro_ad,addr_name from product_addr where pro_ad like s or addr_name like s order by addr_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `product_putback_stock` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select pps.code,serial,pps.emp_id,pps.cus_id,pps.form_id,date_back,emp_name,company,stt_accept,status from product_putback_stock pps left join products p on pps.code=p.code left join employee e on pps.emp_id=e.emp_id left join customer c on pps.cus_id=c.cus_id left join form f on pps.form_id=f.form_id where pps.code like s or serial like s or pps.emp_id like s or pps.cus_id like s or pps.form_id like s or date_back like s or emp_name like s or company like s or stt_accept like s or status like s order by pps.code ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `rate` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select rate_id,rate_buy,rate_sell from rate where rate_id like s or rate_buy like s or rate_sell like s order by rate_id ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `rate_count` (IN `s` VARCHAR(50))  NO SQL
begin
select rate_id,rate_buy,rate_sell from rate where rate_id like s or rate_buy like s or rate_sell like s order by rate_id ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `spare_part` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select sp.id,sp.emp_id,sp.code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark from spare_part sp left join employee e on sp.emp_id=e.emp_id left join product p on sp.code=p.code where id like s or sp.emp_id like s or sp.code like s or serial like s or spart_part like s or pro_id like s or pro_serial like s or spare_date like s or spare_time like s or remark like s ORDER BY sp.id ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `stocks` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select serial,dnv,sk.emp_id,sk.sup_id,emp_name,company,rate_buy,rate_sell,qty from stocks sk left join products p on sk.code=p.code left join employee e on sk.emp_id=e.emp_id left join supplier s on sk.sup_id=s.sup_id left join rate r on sk.rate_id=r.rate_id where serial like s or qty like s or dnv like s or pro_no like s or sk.rate_id like s or sk.emp_id like s or sk.sup_id like s or emp_name like s or company like s or rate_buy like s or rate_sell like s order by s.code ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `supplier` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select sup_id,company,tel,fax,address,email,img_path from supplier where sup_id like s or company like s or tel like s or fax like s or address like s or email like s order by company ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `supplier_count` (IN `s` VARCHAR(50))  NO SQL
begin
select sup_id,company,tel,fax,address,email,img_path from supplier where sup_id like s or company like s or tel like s or fax like s or address like s or email like s order by company ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `unit` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select unit_id,unit_name from unit where unit_id like s or unit_name like s order by unit_name ASC limit page,15;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `unit_count` (IN `s` VARCHAR(50))  NO SQL
begin
select unit_id,unit_name from unit where unit_id like s or unit_name like s order by unit_name ASC;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_auther` (`autherid` VARCHAR(20), `authername` VARCHAR(50))  Begin
Update auther set auther_name=authername where auther_id=autherid;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_brand` (`brand_id_update` INT(11), `brand_name_update` VARCHAR(50))  begin
update brand set brand_name=brand_name_update where brand_id=brand_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_category` (`cate_id_update` INT(11), `cate_name_update` VARCHAR(50))  begin
Update category set cate_name=cate_name_update where cate_id=cate_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_check_stock` (`id_update` INT(11), `code_update` VARCHAR(30), `serial_update` VARCHAR(30), `qty_update` INT(11), `emp_id_update` VARCHAR(20), `check_date_update` DATE, `check_time_update` TIME, `pro_ad_update` INT(11), `remark_update` VARCHAR(100))  begin
Update check_stock set code=code_update,serial=serial_update,qty=qty_update,emp_id=emp_id_update,check_date=check_date_update,check_time=check_time_update,remark=remark_update where id=id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_customer` (`cus_id_update` VARCHAR(20), `company_update` VARCHAR(50), `tel_update` VARCHAR(30), `address_update` VARCHAR(250), `email_update` VARCHAR(100), `stt_id_update` VARCHAR(20))  begin
Update customer set company=company_update,tel=tel_update,address=address_update,email=email_update,stt_id=stt_id_update where cus_id=cus_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_customer_status` (`stt_id_update` VARCHAR(20), `stt_name_update` VARCHAR(50))  begin
Update customer_status set stt_name=stt_name_update where stt_id=stt_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_distribute` (IN `id_update` INT(11), IN `code_update` VARCHAR(30), IN `serial_update` VARCHAR(30), IN `qty_update` INT(11), IN `emp_id_update` VARCHAR(20), IN `form_id_update` INT(11), IN `dis_date_update` DATE, IN `dis_time_update` TIME, IN `remark_update` VARCHAR(100))  begin
Update distribute set code=code_update,serial=serial_update,qty=qty_update,emp_id=emp_id_update,form_id=form_id_update,dis_date=dis_date_update,dis_time=dis_time_update,remark=remark_update where id=id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_employee` (IN `empid` VARCHAR(20), IN `name` VARCHAR(50), IN `surname` VARCHAR(50), IN `genders` VARCHAR(10), IN `tels` VARCHAR(30), IN `addresst` VARCHAR(250), IN `emails` VARCHAR(100), IN `passw` VARCHAR(100), IN `autherid` VARCHAR(20), IN `sttid` INT, IN `imgpath` VARCHAR(50))  Begin
update employee set emp_name=name,emp_surname=surname,gender=genders,tel=tels,address=addresst,email=emails,pass=passw,auther_id=autherid,stt_id=sttid,img_path=imgpath where emp_id=empid;
End$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_form` (IN `form_id_update` INT(11), IN `emp_id_update` VARCHAR(20), IN `cus_id_update` VARCHAR(20), IN `amount_update` DECIMAL(11,2), IN `form_date_update` DATE, IN `form_time_update` TIME, IN `stt_accept_update` VARCHAR(50), IN `status_update` VARCHAR(50), IN `usr_acc_update` VARCHAR(50))  begin
Update form set emp_id=emp_id_update,cus_id=cus_id_update,amount=amount_update,form_date=form_date_update,form_time=form_time_update,stt_accept=stt_accept_update,status=status_update,usr_acc=usr_acc_update where form_id=form_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_form_detail` (`id_update` INT(11), `code_update` VARCHAR(30), `qty_update` INT(11), `form_id_update` INT(11))  begin
Update formdetail set code=code_update,qty=qty_update,form_id=form_id_update where id=id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_products` (`code_update` VARCHAR(30), `pro_name_update` VARCHAR(50), `gen_update` VARCHAR(50), `cate_id_update` INT(11), `unit_id_update` INT(11), `brand_id_update` INT(11), `qtyalert_update` INT(11), `img_path_update` VARCHAR(50))  begin
Update products set pro_name=pro_name_update,gen=gen_update,cate_id=cate_id_update,unit_id=unit_id_update,brand_id=brand_id_update,qtyalert=qtyalert_update,img_path=img_path_update where code=code_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_product_addr` (`pro_ad_update` INT(11), `addr_name_update` VARCHAR(50))  begin
update product_addr set addr_name=addr_name_update where pro_ad=pro_ad_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_rate` (`rate_id_update` VARCHAR(20), `rate_buy_update` DECIMAL(11,2), `rate_sell_update` DECIMAL(11,2))  begin
Update rate set rate_buy=rate_buy_update, rate_sell=rate_sell_update where rate_id=rate_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_spare_part` (IN `id_update` INT(11), IN `emp_id_update` VARCHAR(20), IN `code_update` VARCHAR(30), IN `serial_update` VARCHAR(30), IN `spare_part_update` VARCHAR(50), IN `pro_id_update` VARCHAR(30), IN `pro_serial_update` VARCHAR(30), IN `spare_date_update` DATE, IN `spare_time_update` TIME, IN `remark_update` VARCHAR(100))  begin
Update spare_part set code=code_update,serial=serial_update,spare_part=spare_part_update,pro_id=pro_id_update,pro_serial=pro_serial_update,spare_date=spare_date_update,spare_time=spare_time_update,remark=remark_update where id=id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_supplier` (`sup_id_update` VARCHAR(20), `company_update` VARCHAR(50), `tel_update` VARCHAR(30), `fax_update` VARCHAR(30), `address_update` VARCHAR(250), `email_update` VARCHAR(100), `img_path_update` VARCHAR(50))  begin
Update supplier set company=company_update,tel=tel_update,fax=fax_update,address=address_update,email=email_update,img_path=img_path_update where sup_id=sup_id_update;
end$$

CREATE DEFINER=`sevenjam`@`localhost` PROCEDURE `update_unit` (`unit_id_update` INT(11), `unit_name_update` VARCHAR(50))  begin
Update unit set unit_name=unit_name_update where unit_id=unit_id_update;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `auther`
--

CREATE TABLE `auther` (
  `auther_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `auther_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auther`
--

INSERT INTO `auther` (`auther_id`, `auther_name`) VALUES
('001', 'IT'),
('002', 'ບັນຊີ'),
('003', 'ການຕະຫຼາດ'),
('004', 'ຫົວຫນ້າຊ່າງ'),
('005', 'ຊ່າງ'),
('006', 'ການເງິນ'),
('007', 'ສີ່ງພິມ'),
('008', 'STOCK'),
('009', 'ກາຟຮິກ'),
('010', 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(3, 'EPSON'),
(4, 'Cannon'),
(5, 'Brother'),
(6, 'Dell'),
(7, 'FUJI XEROX'),
(8, 'SUMSUNG'),
(9, 'PRINTER'),
(10, 'Paper');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(3, 'ນ້ໍາຫມຶກ'),
(4, 'ເຄື່ອງພິມ'),
(6, 'PAPER'),
(7, 'ອາໄຫລ່'),
(8, 'ຈັກກ່ອບປີ່'),
(9, 'ອຸປະກອນ ໄອທີ'),
(10, 'ປິນເຕີ'),
(11, 'ສະແກນເນີ້'),
(12, 'ເຄື່ອງພິມບັດ'),
(13, 'ຖົງຝຸ່ນ'),
(14, 'ບັດຂາວ'),
(15, 'ບັດຂາວມີລະຫັດ'),
(16, 'ລິບບ່ອນຟີມ'),
(17, 'TONER');

-- --------------------------------------------------------

--
-- Table structure for table `check_stock`
--

CREATE TABLE `check_stock` (
  `id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check_date` date DEFAULT NULL,
  `check_time` time DEFAULT NULL,
  `pro_ad` int(11) DEFAULT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `company`, `tel`, `address`, `email`, `stt_id`) VALUES
('SD002', 'AGL', '0', '', '', '002'),
('SD005', 'ບີ​ຄອບ​ເພີ​ເຣດ ​ເອັກ​ປອດ ຈຳກັດພຽງຜູ້ດຽວ', '0', '', '', '002'),
('SD006', 'Bangkok Bank PCL,Vientiane Branch', '0', '', '', '002'),
('SD008', 'ບໍລິສັດ ເບທາໂກ (ລາວ) ຈຳກັດຜູ້ດຽວ', '0', '', '', '002'),
('SD010', 'ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ', '0', '', '', '002'),
('SD011', 'DATACOM Co., LTD', '0', '', '', '002'),
('SD012', 'Deloitte (Lao) Sole Company Limited', '0', '', '', '002'),
('SD013', 'DFDL', '0', '', '', '002'),
('SD014', 'dk', '0', '', '', '002'),
('SD015', 'MASCENA Co., LTD', '0', '', '', '002'),
('SD017', 'EMBASSY OF TIMOR LESTE', '0', '', '', '002'),
('SD018', 'EssilorEssilor', '0', '', '', '002'),
('SD019', 'GM TECH', '0', '', '', '002'),
('SD021', 'ICRC', '0', '', '', '002'),
('SD022', 'MR. VISATHONE', '0', '', '', '002'),
('SD023', 'IOM (UNDP)', '0', '', '', '002'),
('SD024', 'ISUZU LAO SERVICES SOLE CO., LTD', '0', '', '', '002'),
('SD025', 'I-TECC', '0', '', '', '002'),
('SD028', 'Khong View', '0', '', '', '002'),
('SD029', 'KP COMPANY LTD', '0', '', '', '002'),
('SD030', 'Krungsri Leasing Services Company Limited', '0', '', '', '002'),
('SD031', 'LAO AIRLINES', '0', '', '', '002'),
('SD033', 'ບໍລິສັດລາວ ໂກຣເບີນເອັນຈີເນຍລິງຄອນຊາວຕັນ', '0', '', '', '002'),
('SD034', 'LAO TELECOM', '0', '', '', '002'),
('SD036', 'LDC IMPORT-EXPORT CO., LTD', '0', '', '', '002'),
('SD037', 'LNCCI', '0', '', '', '002'),
('SD038', 'Lao Lottery Development No.3', '0', '', '', '002'),
('SD039', 'ໂຮງພິມມັນທາຕຸລາດ', '0', '', '', '002'),
('SD041', 'ກະຊວງ​ພະລັງງານ ​ແລະ ບໍ່​ແຮ່', '0', '', '', '002'),
('SD043', 'ທ່ານ ຈັນທະໄລ ອອ່ນລັງສີ', '0', '', '', '002'),
('SD046', 'MSIG Insurance Co., Ltd', '0', '', '', '002'),
('SD049', 'Pakpasak Kanphim', '0', '', '', '002'),
('SD050', 'Panyathip Advertising', '0', '', '', '002'),
('SD051', 'ໂຮງຮຽນ ປັນຍາທິບ', '0', '', '', '002'),
('SD052', 'Petroleum Trading Lao Co., Ltd', '0', '', '', '002'),
('SD053', 'ທະນາຄານ ພົງສະຫວັນ', '0', '', '', '002'),
('SD055', 'ລັດວິສາຫະກິດ ໄປສະນີລາວ', '0', '', '', '002'),
('SD058', 'Savanh Pacifca Development Co., Ltd', '0', '', '', '002'),
('SD059', 'ໂຮງພີມສະຫວ່າງ', '0', '', '', '002'),
('SD060', 'SCHNEIDER', '0', '', '', '002'),
('SD061', 'SINOOK COFFEE', '0', '', '', '002'),
('SD067', 'TOBACCO LAO', '0', '', '', '002'),
('SD068', 'Unilever Services (Lao) Sole Co., Ltd', '0', '', '', '002'),
('SD069', 'URAI PHANICH (LAO) CO., LTD', '0', '', '', '002'),
('SD070', 'Mr. Somsy', '0', '', '', '002'),
('SD073', 'Insee Trading', '0', '', '', '002'),
('SD079', 'LAO ROOT', '0', '', '', '002'),
('SD081', 'First Commercial Bank Ltd., Vientiane Branch', '0', '', '', '002'),
('SD082', 'ສະຫະພັນ ເທັນນິສ ແຫ່ງຊາດລາວ', '0', '', '', '002'),
('SD083', 'ບໍລິສັດ ສິດທິໂລຈິດສຕິກ ລາວ ຈໍາກັດ', '0', '', '', '002'),
('SD085', 'ບໍລິສັດ ຂວັນໃຈ ການຄ້າ', '0', '', '', '002'),
('SD089', 'SDC', '0', '', '', '002'),
('SD092', 'ໃສທິລາດ ກຣູບ', '0', '', '', '002'),
('SD093', 'ໂຮງງານຜະລິດຢາເລກ2', '0', '', '', '002'),
('SD094', 'Advanced-Connectek Lao Co., Ltd', '0', '', '', '002'),
('SD096', 'HIS', '0', '', '', '002'),
('SD102', 'Namtheun 1 Hydropower Project', '0', '', '', '002'),
('SD103', 'Lao Coca-Cola Bottling Co., Ltd', '0', '', '', '002'),
('SD104', 'Isuzu Truck Service Factory Lao Co., Ltd', '0', '', '', '002'),
('SD105', 'ກະຊວງການເງິນ', '0', '', '', '002'),
('SD106', 'ບໍລິສັດ ຮຸ່ງໄຊຍະສິງ ຈະເລີນ ຜະລິດຕະພັນ ການກະເສດ ຈໍາ', '0', '', '', '002'),
('SD108', 'MR VILAIPHET', '0', '', '', '002'),
('SD110', 'Savang Photo', '0', '', '', '002'),
('SD111', 'SGS (Lao) Sole Co., Ltd', '0', '', '', '002'),
('SD112', 'DKSH', '0', '', '', '002'),
('SD113', 'HHL', '0', '', '', '002'),
('SD115', 'JICA PROJECT TEAM', '0', '', '', '002'),
('SD117', 'NAMCHE1 HYDRO POWER CO., LTD', '0', '', '', '002'),
('SD120', 'ST-MUANG THAI INSURANCE CO., LTD', '0', '', '', '002'),
('SD121', 'BIC BANK LAO CO., LTD', '0', '', '', '002'),
('SD123', 'DG Group', '0', '', '', '002'),
('SD124', 'KP3G & NOMURA Trading CO., LTD', '0', '', '', '002'),
('SD125', 'ບໍລິສັດ ພີທີ ຈໍາກັດ ( ຜູ້ດຽວ )', '0', '', '', '002'),
('SD126', 'Tiong Nam Logistics Solution ( Lao ) Co., Ltd', '0', '', '', '002'),
('SD130', 'KP (Logistic)', '0', '', '', '002'),
('SD132', 'ໂຮງພິມ ປານຄຳ', '0', '', '', '002'),
('SD133', 'KPMG LAO., LTD', '0', '', '', '002'),
('SD134', 'Panyathip Plan B Media lao Co., Ltd', '0', '', '', '002'),
('SD135', 'Lao Quality Sole Co., Ltd', '0', '', '', '002'),
('SD136', 'ປີໂຕເທດພູມ່າ ເອເນີຈິ ນໍາເຂົ້າ - ສົ່ງອອກ ຈໍາກັດ', '0', '', '', '002'),
('SD137', 'ບໍລິສັດ ຊີເອັດສ໌ ພັດທະນາພະລັງງານ ຈຳກັດຜູ້ດຽວ', '0', '', '', '002'),
('SD138', 'ບໍລິສັດ ( Me Idea ) ມີໄອເດຍ', '0', '', '', '002'),
('SD140', 'ບໍລິສັດ ລາວເທັບຈະເລີນ ປະກັນໄພ', '0', '', '', '002'),
('SD141', 'LAO TOYOTA SERVICE CO., LTD', '0', '', '', '002'),
('SD142', 'HOYA LAOS., LTD', '0', '', '', '002'),
('SD143', 'ເອັມພີ ກໍ່ສ້າງ ( MP Construction )', '0', '', '', '002'),
('SD144', 'ບໍລິສັດ ມະຫາໂຊກການຄ້າ', '0', '', '', '002'),
('SD145', 'Burasari Heritage Luang Prabang', '0', '', '', '002'),
('SD146', 'TOYOTA Tsusho Leasing ( Lao ) Co., Ltd', '0', '', '', '002'),
('SD147', 'ສະຖາບັນການເງິນຈຸລະພາກທີ່ບໍ່ຮັບເງິນຝາກ ລາວ-ຍີ່ປຸ່ນ', '0', '', '', '002'),
('SD148', 'ບໍລິສັດ ລາວໂຕໂຢຕ້າ ພາກໃຕ້ ບໍລິການ ຈໍາກັດ', '0', '', '', '002'),
('SD149', 'World Health Organisation', '0', '', '', '002'),
('SD150', 'JTI International ( Lao ) Sole Co., Ltd', '0', '', '', '002'),
('SD151', 'ບໍລິສັດ ລາວນິຊິມັດຊຶ ກໍ່ສ້າງຈໍາກັດ', '0', '', '', '002'),
('SD154', 'ບໍລິສັດ ພາຫະນະ', '0', '', '', '002'),
('SD156', 'KASIKORNTHAI BANK LTD', '0', '', '', '002'),
('SD158', 'M Lao Import - Export co., Ltd', '0', '', '', '002'),
('SD160', 'ບໍລິສັດ P26 ອອກແບບ ແລະ ກໍ່ສ້າງເຄຫາສະຖານ', '0', '', '', '002'),
('SD161', 'ບໍລິສັດ ຕັງຈະເລີນ', '0', '', '', '002'),
('SD162', 'ບໍລິສັດ ກົດໝາຍ ວໍຊັ້ນລໍ ລາວຈໍາກັດ', '0', '', '', '002'),
('SD163', 'ບໍລິສັດ ບອດຕ໌ລອງເຢັຍ ຈຳກັດ', '0', '', '', '002'),
('SD165', 'Lao Vita Development Co., Ltd', '0', '', '', '002'),
('SD167', 'Sure Stay Hotel by Best Western', '0', '', '', '002'),
('SD170', 'ທະນາຄານ ການຄ້າຕ່າງປະເທດລາວ ມະຫາຊົນ ( BCEL )', '0', '', '', '002'),
('SD171', 'MARUHAN Japan Bank Lao Co., Ltd', '0', '', '', '002'),
('SD172', 'ບໍລິສັດ ເຄພີ ບໍລິການ ແລະ ພັດທະນາ ສີມືແຮງງານ ຈໍາກັດ', '020 5647 0999', '', '', '002'),
('SD173', 'ບໍລິສັດ ພົງສະຫວັນ ປະກັນໄພ (ເອພີເອ) ຈຳກັດ', '020 76140903', '', '', '002'),
('SD174', 'Nongchan Complex Development  Co., Ltd  ( Vientian', '020 5647 0999', '', '', '002'),
('SD175', 'RMA', '0', '', '', '002'),
('SD176', 'ຮ້ານຄ້າ Friend Ship Supermart Vientiane', '0', '', '', '002'),
('SD177', 'ບໍລິສັດ ອອນຊອນ ຈໍາກັດຜູ້ດຽວ', '0', '', '', '002'),
('SD178', 'ທະນາຄານຄາເທ', '0', '', '', '002'),
('SD179', 'ບໍລິສັດ ສຸຂະລາສີ ຂາອອກ - ຂາເຂົ້າ ຈໍາກັດ', '020 5601 7788', '', '', '002'),
('SD180', 'ສະຖາບັນການເງິນຈຸລະພາກທີ່ຮັບເງິນຝາກ ນິວຄອນເຊັບ ຈໍາກ', '020 2307 9789', '', '', '002'),
('SD181', 'Namtheun 2', '0', '', '', '002'),
('SD182', 'ຮ້ານ ອາຫານລາວເດີມ', '0', '', '', '002'),
('SD183', 'Nippon Koei Co.,Ltd', '020 5555 2883', '', '', '002'),
('SD184', 'ບໍລິສັດ ຄູໂບຕ້າລາວ ຈຳກັດຜູ້ດຽວ', '0', '', '', '002'),
('SD185', 'ບໍລິສັດ Bivac Lao.,', '0', '', '', '002'),
('SD186', 'ບໍລິສັດ ລີນຟອກ ໂລຈິດຕີກ (ລາວ) ຈຳກັດ', '0', '', '', '002'),
('SD187', 'KSP', '0', '', '', '002'),
('SD188', 'ສໍານັກງານ ປົກປ້ອງເງິນຝາກ ທະນາຄານແຫ່ງ ສປປລາວ', '0', '', '', '002'),
('SD189', 'ບໍລິສັດ ໂມເດີນໂຮມ', '030 5041959', '', '', '002'),
('SD190', 'ບໍລິສັດ ນິວລີ້ງ ຈໍາກັດຜູ້ດຽວ', '0', '', '', '002');

-- --------------------------------------------------------

--
-- Table structure for table `customer_status`
--

CREATE TABLE `customer_status` (
  `stt_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stt_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_status`
--

INSERT INTO `customer_status` (`stt_id`, `stt_name`) VALUES
('001', 'SALE'),
('002', 'RENT'),
('003', 'OFFICE');

-- --------------------------------------------------------

--
-- Table structure for table `distribute`
--

CREATE TABLE `distribute` (
  `id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `dis_date` date DEFAULT NULL,
  `dis_time` time DEFAULT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emp_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auther_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt_id` int(11) DEFAULT NULL,
  `img_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_surname`, `gender`, `tel`, `address`, `email`, `pass`, `auther_id`, `stt_id`, `img_path`) VALUES
('001', 'Seven', 'test', 'ຍິງ', '0203213', 'test', 'seven@seven.com', '202cb962ac59075b964b07152d234b70', '001', 2, ''),
('002', 'LAXET', 'CHANTHAPHANYA', 'ຊາຍ', '0', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '004', 2, ''),
('003', 'Anousone', 'Phachanthavong', 'ຊາຍ', '02058585151', '', 'anousone.p@sevendigital.la', '81dc9bdb52d04dc20036dbd8313ed055', '001', 2, ''),
('004', 'Keota', 'DUANGPHACHAN', 'ຊາຍ', '0', '', 'keota', '202cb962ac59075b964b07152d234b70', '001', 2, ''),
('005', 'Chanthaphone', 'PHANTHAVONG', 'ຊາຍ', '0', '', 'chanthaphone', '202cb962ac59075b964b07152d234b70', '005', 2, ''),
('006', 'Phendavanh', 'BOUDTAKHOD', 'ຍິງ', '02059812060', '', 'phendavanh', '202cb962ac59075b964b07152d234b70', '005', 2, ''),
('007', 'Saengphachan', 'VIENGSAVANH', 'ຊາຍ', '0', '', 'Saengphachan', '202cb962ac59075b964b07152d234b70', '003', 2, ''),
('011', 'Bounkham', 'DUANGMANI', 'ຊາຍ', '0', '', 'Bounkham', '202cb962ac59075b964b07152d234b70', '010', 2, ''),
('012', 'Bounyord', 'SOMMANIVONG', 'ຍິງ', '02029933260', '', 'bounyordsommanivong@gmail.com', '276714a8442b0ac5c1421513d089a795', '008', 3, ''),
('013', 'PHANSALATH', 'YILATHCHAY', 'ຊາຍ', '0', '', 'PHANSALAT', '202cb962ac59075b964b07152d234b70', '001', 2, ''),
('014', 'HATSADY', 'PHOMMACHANH', 'ຊາຍ', '0', '', 'HATSADY', '202cb962ac59075b964b07152d234b70', '005', 2, ''),
('015', 'VANHNYPHONE', 'VONGKHAMPHIM', 'ຊາຍ', '0', '', 'VONGKHAMPHIM', '202cb962ac59075b964b07152d234b70', '005', 2, ''),
('016', 'Khamsaeng', 'Khamsaeng', 'ຊາຍ', '0', '', 'Khamsaeng', '202cb962ac59075b964b07152d234b70', '001', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_status`
--

CREATE TABLE `emp_status` (
  `stt_id` int(11) NOT NULL,
  `stt_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emp_status`
--

INSERT INTO `emp_status` (`stt_id`, `stt_name`) VALUES
(1, 'ຜູ້ຈັດການ'),
(2, 'ຜູ້ຂໍເບີກສິນຄ້າ'),
(3, 'ຜູ້ເບີກຈ່າຍສິນຄ້າ'),
(4, 'ຜູ້ນັບສະຕ໋ອກ');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cus_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `packing_no` int(11) DEFAULT NULL,
  `form_date` date DEFAULT NULL,
  `form_time` time DEFAULT NULL,
  `stt_accept` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_acc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `emp_id`, `cus_id`, `amount`, `packing_no`, `form_date`, `form_time`, `stt_accept`, `status`, `usr_acc`) VALUES
(1, '003', 'SD002', 2.00, 1111, '2021-01-12', '10:10:52', 'ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', '');

-- --------------------------------------------------------

--
-- Table structure for table `formdetail`
--

CREATE TABLE `formdetail` (
  `id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `formdetail`
--

INSERT INTO `formdetail` (`id`, `code`, `qty`, `form_id`) VALUES
(12, 'CT201911(F)', 1, 1),
(13, '(CT351075)', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `code` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pro_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `qtyalert` int(11) DEFAULT NULL,
  `img_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `pro_name`, `gen`, `cate_id`, `unit_id`, `brand_id`, `qtyalert`, `img_path`) VALUES
('(CT351075)', 'DRUM', '2320/2520', 7, 5, 7, 222, ''),
('CT201434', 'Toner BLACK DocuCentre C2263/2265/2260', '2263/2260/2265', 17, 5, 7, 0, ''),
('CT201911', 'Toner Cartridge', 's2220', 3, 5, 6, 10, 'seven_5ff6a3d5eaf2f.jfif'),
('CT201911(F)', 'TONER', '2010/2320/2011/2520', 3, 5, 4, 20, ''),
('DC2010CPS', 'DocuCentre', 'S2010', 4, 6, 4, 5, 'seven_5ff6a394d18c0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_addr`
--

CREATE TABLE `product_addr` (
  `pro_ad` int(11) NOT NULL,
  `addr_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_addr`
--

INSERT INTO `product_addr` (`pro_ad`, `addr_name`) VALUES
(3, 'ສາງເຊເວັນໂພນທັນ'),
(4, 'ສາງຫ້ອງເບີ1 ໂພນທັນ'),
(5, 'ສາງຫ້ອງເບີ2 ໂພນນທັນ'),
(6, 'ສາງຫ້ອງເບີ3 ໂພນທັນ'),
(7, 'ສາງຫ້ອງເບີ4 ໂພນທັນ');

-- --------------------------------------------------------

--
-- Table structure for table `product_putback_stock`
--

CREATE TABLE `product_putback_stock` (
  `id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `date_back` date DEFAULT NULL,
  `time_back` time DEFAULT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rate_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rate_buy` decimal(11,2) DEFAULT NULL,
  `rate_sell` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `rate_buy`, `rate_sell`) VALUES
('LAK', 1.00, 1.00),
('THB', 340.00, 345.00),
('USD', 10200.00, 10300.00);

-- --------------------------------------------------------

--
-- Table structure for table `spare_part`
--

CREATE TABLE `spare_part` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spare_part` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_serial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spare_date` date DEFAULT NULL,
  `spare_time` time DEFAULT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `sk_id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `dnv` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imp_no` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imp_date` date DEFAULT NULL,
  `imp_time` time DEFAULT NULL,
  `pro_no` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rate_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rate` decimal(11,2) DEFAULT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sup_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`sk_id`, `code`, `serial`, `qty`, `price`, `dnv`, `imp_no`, `imp_date`, `imp_time`, `pro_no`, `rate_id`, `rate`, `emp_id`, `sup_id`, `remark`) VALUES
(4, 'DC2010CPS', 'AADD', 1, 6000000.00, '001', '001', '2021-01-07', '13:04:54', '1', 'LAK', 1.00, '001', '003', ''),
(5, 'DC2010CPS', 'AAWW', 1, 6000000.00, '001', '001', '2021-01-07', '13:04:54', '2', 'LAK', 1.00, '001', '003', ''),
(6, 'CT201911', 'RTEW', 1, 90000000.00, '001', '001', '2021-01-07', '13:04:54', '3', 'LAK', 1.00, '001', '003', ''),
(7, 'CT201911', 'SANGW', 1, 9000000.00, '001', '001', '2021-01-07', '13:04:54', '4', 'LAK', 1.00, '001', '003', ''),
(8, 'CT201911(F)', 'Toner Cartridge S222O,S2320,S2', 106, 450.00, '', '', '2021-01-08', '15:32:28', '32212', 'THB', 1.00, '001', '002', ''),
(9, 'CT201911(F)', 'Toner Cartridge S222O,S2320,S2', 20, 450.00, '', '', '2021-01-11', '10:11:00', '32212', 'THB', 1.00, '001', '001', ''),
(10, '(CT351075)', '2320/2520', 222, 5600.00, '222', '222', '2021-01-11', '10:11:00', '222', 'THB', 1.00, '001', '001', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `company`, `tel`, `fax`, `address`, `email`, `img_path`) VALUES
('001', 'EPSON', 'EPSON', '-', '-', '-', 'seven_5ff6a2c9c9ccc.'),
('002', 'Fuji', 'Fuji', '-', '-', '-', 'seven_5ff6a29d3d00a.'),
('003', 'ບໍລິສັດ ຊີເອັດສ ພັດທະນາພະລັງງນ ຈຳກັດຜູ້ດຽວ', '-', '-', '-', 'CS@hotmail.com', ''),
('004', 'KI DIGITAL', '0', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`) VALUES
(5, 'ກ່ອງ'),
(6, 'ໜ່ວຍ'),
(7, 'ຊອງ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auther`
--
ALTER TABLE `auther`
  ADD PRIMARY KEY (`auther_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `check_stock`
--
ALTER TABLE `check_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `pro_ad` (`pro_ad`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `stt_id` (`stt_id`);

--
-- Indexes for table `customer_status`
--
ALTER TABLE `customer_status`
  ADD PRIMARY KEY (`stt_id`);

--
-- Indexes for table `distribute`
--
ALTER TABLE `distribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `auther_id` (`auther_id`),
  ADD KEY `stt_id` (`stt_id`);

--
-- Indexes for table `emp_status`
--
ALTER TABLE `emp_status`
  ADD PRIMARY KEY (`stt_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `formdetail`
--
ALTER TABLE `formdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `product_addr`
--
ALTER TABLE `product_addr`
  ADD PRIMARY KEY (`pro_ad`);

--
-- Indexes for table `product_putback_stock`
--
ALTER TABLE `product_putback_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `spare_part`
--
ALTER TABLE `spare_part`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`sk_id`),
  ADD KEY `code` (`code`),
  ADD KEY `rate_id` (`rate_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `check_stock`
--
ALTER TABLE `check_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `distribute`
--
ALTER TABLE `distribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `formdetail`
--
ALTER TABLE `formdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_addr`
--
ALTER TABLE `product_addr`
  MODIFY `pro_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_putback_stock`
--
ALTER TABLE `product_putback_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spare_part`
--
ALTER TABLE `spare_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_stock`
--
ALTER TABLE `check_stock`
  ADD CONSTRAINT `check_stock_ibfk_1` FOREIGN KEY (`code`) REFERENCES `products` (`code`),
  ADD CONSTRAINT `check_stock_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `check_stock_ibfk_3` FOREIGN KEY (`pro_ad`) REFERENCES `product_addr` (`pro_ad`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`stt_id`) REFERENCES `customer_status` (`stt_id`);

--
-- Constraints for table `distribute`
--
ALTER TABLE `distribute`
  ADD CONSTRAINT `distribute_ibfk_1` FOREIGN KEY (`code`) REFERENCES `products` (`code`),
  ADD CONSTRAINT `distribute_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `distribute_ibfk_4` FOREIGN KEY (`form_id`) REFERENCES `form` (`form_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`auther_id`) REFERENCES `auther` (`auther_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`stt_id`) REFERENCES `emp_status` (`stt_id`);

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `form_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `formdetail`
--
ALTER TABLE `formdetail`
  ADD CONSTRAINT `formdetail_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `form` (`form_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `product_putback_stock`
--
ALTER TABLE `product_putback_stock`
  ADD CONSTRAINT `product_putback_stock_ibfk_1` FOREIGN KEY (`code`) REFERENCES `products` (`code`),
  ADD CONSTRAINT `product_putback_stock_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `product_putback_stock_ibfk_4` FOREIGN KEY (`form_id`) REFERENCES `form` (`form_id`);

--
-- Constraints for table `spare_part`
--
ALTER TABLE `spare_part`
  ADD CONSTRAINT `spare_part_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `spare_part_ibfk_2` FOREIGN KEY (`code`) REFERENCES `products` (`code`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`code`) REFERENCES `products` (`code`),
  ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`rate_id`) REFERENCES `rate` (`rate_id`),
  ADD CONSTRAINT `stocks_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `stocks_ibfk_4` FOREIGN KEY (`sup_id`) REFERENCES `supplier` (`sup_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
