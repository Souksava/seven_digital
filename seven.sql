-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seven`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `auther` (IN `s` VARCHAR(50), IN `page` INT(5))  Begin
Select auther_id,auther_name from auther where auther_id like s or auther_name like s order by auther_name ASC LIMIT page,15;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `auther_count` (IN `s` VARCHAR(50))  NO SQL
Begin
Select auther_id,auther_name from auther where auther_id like s or auther_name like s order by auther_name ASC;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `brand` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select brand_id,brand_name from brand where brand_id like s or brand_name like s order by brand_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `brand_count` (IN `s` VARCHAR(50))  NO SQL
begin
select brand_id,brand_name from brand where brand_id like s or brand_name like s order by brand_name ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `category` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select cate_id,cate_name from category where cate_id like s or cate_name like s order by cate_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `category_count` (IN `s` VARCHAR(50))  NO SQL
begin
select cate_id,cate_name from category where cate_id like s or cate_name like s order by cate_name ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkstock` (IN `da` DATE, IN `db` DATE, IN `page` INT(5))  NO SQL
begin
select
ck.id,ck.code,ck.serial,ck.qty,ck.emp_id,ck.check_date,ck.check_time,ck.pro_ad,ck.remark,p.pro_name,p.gen,p.img_path,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,e.emp_name,pad.addr_name from check_stock ck left join products p on ck.code=p.code left join employee e on ck.emp_id=e.emp_id left join product_addr pad on ck.pro_ad=pad.pro_ad left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where(check_date between da and db) order by ck.id ASC limit page,15;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkstock_count` (IN `da` DATE, IN `db` DATE)  NO SQL
begin
select
ck.id,ck.code,ck.serial,ck.qty,ck.emp_id,ck.check_date,ck.check_time,ck.pro_ad,ck.remark,p.pro_name,p.gen,p.img_path,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,e.emp_name,pad.addr_name from check_stock ck left join products p on ck.code=p.code left join employee e on ck.emp_id=e.emp_id left join product_addr pad on ck.pro_ad=pad.pro_ad left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where(check_date between da and db) order by ck.id ASC;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `customer` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select c.cus_id,company,tel,address,email,c.stt_id,stt_name from customer c left join customer_status cs on c.stt_id=cs.stt_id where c.cus_id like s or company like s or tel like s or address like s or email like s or c.stt_id like s or stt_name like s order by company ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `customer_count` (IN `s` VARCHAR(50))  NO SQL
begin
select c.cus_id,company,tel,address,email,c.stt_id,stt_name from customer c left join customer_status cs on c.stt_id=cs.stt_id where c.cus_id like s or company like s or tel like s or address like s or email like s or c.stt_id like s or stt_name like s order by company ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `customer_status` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select stt_id,stt_name from customer_status where stt_id like s or stt_name like s ORDER by stt_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `customer_status_count` (IN `s` VARCHAR(50))  NO SQL
begin
select stt_id,stt_name from customer_status where stt_id like s or stt_name like s ORDER by stt_name ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_auther` (`autherid` VARCHAR(20))  Begin
Delete from  auther  where auther_id=autherid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_brand` (IN `id` INT(11))  begin
Delete from brand where brand_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_category` (`id` INT(11))  begin
Delete from category where cate_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_customer` (`id` VARCHAR(20))  begin
Delete from customer where cus_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_customer_status` (`id` VARCHAR(20))  begin
Delete from customer_status where stt_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_employee` (`empid` VARCHAR(20))  Begin
Delete from  employee  where emp_id=empid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_form` (`id` VARCHAR(20))  begin
Delete from form where form_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_products` (`id` INT(11))  begin
Delete from products where code=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_product_addr` (IN `id` INT(11))  begin
Delete from product_addr where pro_ad=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_rate` (IN `id` VARCHAR(20))  begin
Delete from rate where rate_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_spare_part` (IN `spid` INT(11))  begin
Delete from spare_part where id=spid;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_supplier` (`id` VARCHAR(20))  begin
Delete from supplier where sup_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_unit` (`id` INT(11))  begin
delete from unit where unit_id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `distribute` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select id,d.code,serial,d.emp_id,d.form_id,dis_date,emp_name,pro_name,gen,stt_accept,status,c.company from distribute d left join products p on d.code=p.code left join employee e on d.emp_id=e.emp_id left join form f on d.form_id=f.form_id left join customer c on f.cus_id=c.cus_id WHERE id like s or d.code like s or serial like s or d.emp_id like s or d.form_id like s or dis_date like s or emp_name like s or pro_name like s or gen like s or stt_accept like s or emp_name like s or status like s or c.company like s order by d.code ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `employee` (IN `s` VARCHAR(250), IN `page` INT(5))  Begin
select emp_id,emp_name,emp_surname,gender,tel,address,email,pass,e.auther_id,auther_name,e.stt_id,stt_name,img_path from employee e left join auther a on e.auther_id=a.auther_id left join emp_status s on e.stt_id=s.stt_id where emp_id like s or emp_name like s or emp_surname like s or gender like s or address like s or email like s or auther_name like s or stt_name like s order by emp_name ASC limit page,15;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `employee_count` (IN `s` VARCHAR(50))  NO SQL
Begin
select emp_id,emp_name,emp_surname,gender,tel,address,email,pass,e.auther_id,auther_name,e.stt_id,stt_name,img_path from employee e left join auther a on e.auther_id=a.auther_id left join emp_status s on e.stt_id=s.stt_id where emp_id like s or emp_name like s or emp_surname like s or gender like s or address like s or email like s or auther_name like s or stt_name like s order by emp_name ASC;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form` (IN `page` INT(5))  begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where stt_accept='ຍັງບໍ່ອະນຸມັດ' order by form_date DESC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form2` (IN `s` VARCHAR(50), IN `page` INT(5), IN `emp` VARCHAR(20))  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where f.form_id like s or f.emp_id like s or f.cus_id like s or form_date like s or stt_accept like s or amount like s or STATUS like s or usr_acc like s or emp_name like s or company like s or packing_no like s or fd.code like s or p.img_path like s or form_time like s and f.emp_id=emp group by f.form_id order by form_date DESC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form2_count` (IN `s` VARCHAR(50), IN `emp` INT(20))  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where f.form_id like s or f.emp_id like s or f.cus_id like s or form_date like s or stt_accept like s or amount like s or STATUS like s or usr_acc like s or emp_name like s or company like s or packing_no like s or fd.code like s or p.img_path like s or form_time like s and f.emp_id=emp GROUP by f.form_id order by form_date DESC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form_count` ()  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where stt_accept='ຍັງບໍ່ອະນຸມັດ' order by form_date DESC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form_detail` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select id,fd.code,pro_name,unit_name,cate_name,brand_name,f.form_date,f.form_time,f.stt_accept,f.emp_id,emp_name,f.cus_id,company,packing_no,gen,qty,fd.form_id,p.img_path from formdetail fd left join form f on fd.form_id=f.form_id left join products p on fd.code=p.code left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join customer cs on f.cus_id=cs.cus_id left join employee em on f.emp_id=em.emp_id where (fd.code like s or fd.form_id like s or company like s or emp_name like s) and stt_accept='ອະນຸມັດ' order by f.form_date ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form_detail_count` (IN `s` VARCHAR(50))  NO SQL
begin
select id,fd.code,pro_name,unit_name,cate_name,brand_name,f.form_date,f.form_time,f.stt_accept,f.emp_id,emp_name,f.cus_id,company,packing_no,qty,fd.form_id from formdetail fd left join form f on fd.form_id=f.form_id left join products p on fd.code=p.code left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join customer cs on f.cus_id=cs.cus_id left join employee em on f.emp_id=em.emp_id where (fd.code like s or fd.form_id like s or company like s or emp_name like s) and stt_accept='ອະນຸມັດ' order by f.form_date ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_auther` (`autherid` VARCHAR(20), `authername` VARCHAR(50))  Begin
Insert into auther values(autherid,authername);
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_brand` (`brand_name` VARCHAR(50))  begin
insert into brand(brand_name) values(brand_name);
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_category` (`cate_name` VARCHAR(50))  begin
Insert into category (cate_name) values(cate_name);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_check_stock` (`code` VARCHAR(30), `serial` VARCHAR(30), `qty` INT(11), `emp_id` VARCHAR(20), `check_date` DATE, `check_time` TIME, `pro_ad` INT(11), `remark` VARCHAR(100))  begin
insert into check_stock (code,serial,qty,emp_id,check_date,check_time,pro_ad,remark) values(code,serial,qty,emp_id,check_date,check_time,pro_ad,remark);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_customer` (`cus_id` VARCHAR(20), `company` VARCHAR(50), `tel` VARCHAR(30), `address` VARCHAR(250), `email` VARCHAR(100), `stt_id` VARCHAR(20))  begin
Insert into customer values(cus_id,company,tel,address,email,stt_id);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_customer_status` (`sst_id` VARCHAR(20), `stt_name` VARCHAR(50))  begin
Insert into customer_status values(sst_id,stt_name);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_distribute` (IN `code` VARCHAR(30), IN `serial` VARCHAR(30), IN `qty` INT(11), IN `emp_id` VARCHAR(20), IN `form_id` INT(11), IN `dis_date` DATE, IN `dis_time` TIME, IN `remark` VARCHAR(100))  begin
insert into distribute (code,serial,qty,emp_id,form_id,dis_date,dis_time,remark) values(code,serial,qty,emp_id,form_id,dis_date,dis_time,remark);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_employee` (IN `empid` VARCHAR(20), IN `name` VARCHAR(50), IN `surname` VARCHAR(50), IN `gender` VARCHAR(10), IN `tel` VARCHAR(30), IN `address` VARCHAR(250), IN `email` VARCHAR(100), IN `pass` VARCHAR(100), IN `autherid` VARCHAR(20), IN `sttid` INT, IN `imgpath` VARCHAR(50))  Begin
Insert into employee values(empid,name,surname,gender,tel,address,email,md5(pass),autherid,sttid,imgpath);
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_form` (IN `form_id` INT(11), IN `emp_id` VARCHAR(20), IN `cus_id` VARCHAR(20), IN `amount` DECIMAL(11,2), IN `packing` INT(11), IN `form_date` DATE, IN `form_time` TIME, IN `stt_accept` VARCHAR(50), IN `status` VARCHAR(50), IN `usr_acc` VARCHAR(50))  begin
Insert into form(form_id,emp_id,cus_id,amount,packing_no,form_date,form_time,stt_accept,status,usr_acc,seen1,seen2) values(form_id,emp_id,cus_id,amount,packing,form_date,form_time,stt_accept,status,usr_acc,'0','0');
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_form_detail` (IN `code` VARCHAR(30), IN `qty` INT(11), IN `form_id` INT(11))  begin
insert into formdetail (code,qty,form_id) values(code,qty,form_id);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_products` (`code` VARCHAR(30), `pro_name` VARCHAR(50), `gen` VARCHAR(50), `cate_id` INT(11), `unit_id` INT(11), `brand_id` INT(11), `qtyalert` INT(11), `img_path` VARCHAR(50))  begin
Insert into products values(code,pro_name,gen,cate_id,unit_id,brand_id,qtyalert,img_path);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product_addr` (`addr_name` VARCHAR(50))  begin
insert into product_addr(addr_name) values(addr_name);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product_putback_stock` (IN `code` VARCHAR(30), IN `serial` VARCHAR(30), IN `qty` INT(11), IN `emp_id` VARCHAR(20), IN `form_id` INT(11), IN `date_back` DATE, IN `time_back` TIME, IN `remark` VARCHAR(100))  begin
insert into product_putback_stock (code,serial,qty,emp_id,form_id,date_back,time_back,remark) values(code,serial,qty,emp_id,form_id,date_back,time_back,remark);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_rate` (`rate_id` VARCHAR(20), `rate_buy` DECIMAL(11,2), `rate_sell` DECIMAL(11,2))  begin
insert into rate values(rate_id,rate_buy,rate_sell);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_spare_part` (`emp_id` VARCHAR(20), `code` VARCHAR(30), `serial` VARCHAR(30), `spare_part` VARCHAR(50), `pro_id` VARCHAR(30), `pro_serial` VARCHAR(30), `spare_date` DATE, `spare_time` TIME, `remark` VARCHAR(100))  begin
insert into spare_part(emp_id,code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark) values(emp_id,code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_stocks` (`code` VARCHAR(30), `serial` VARCHAR(30), `qty` INT(11), `price` DECIMAL(11,2), `dnv` VARCHAR(10), `imp_no` VARCHAR(10), `imp_date` DATE, `imp_time` TIME, `pro_no` VARCHAR(5), `rate_id` VARCHAR(20), `rate` DECIMAL(11,2), `emp_id` VARCHAR(20), `sup_id` VARCHAR(20), `remark` VARCHAR(100))  begin
Insert into stocks (code,serial,qty,price,dnv,imp_no,imp_date,imp_time,pro_no,rate_id,rate,emp_id,sup_id,remark) values(code,serial,qty,price,dnv,imp_no,imp_date,imp_time,pro_no,rate_id,rate,emp_id,sup_id,remark);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_supplier` (`sup_id` VARCHAR(20), `company` VARCHAR(50), `tel` VARCHAR(30), `fax` VARCHAR(30), `address` VARCHAR(250), `email` VARCHAR(100), `img_path` VARCHAR(50))  begin
Insert into supplier values(sup_id,company,tel,fax,address,email,img_path);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_unit` (IN `unit_name` VARCHAR(50))  begin
Insert into unit (unit_name) values(unit_name);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `products` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,cate_name,unit_name,brand_name,qtyalert,p.img_path from products p left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s order by pro_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `products2` (IN `s` VARCHAR(50), IN `page` INT(5))  NO SQL
begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,SUM(s.qty) as qty,cate_name,unit_name,brand_name,qtyalert,p.img_path from products p left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join stocks s on p.code=s.code where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s GROUP BY s.code order by pro_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `products2_count` (IN `s` VARCHAR(50))  NO SQL
begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,SUM(s.qty) as qty,cate_name,unit_name,brand_name,qtyalert,p.img_path from products p left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join stocks s on p.code=s.code where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s GROUP BY s.code order by pro_name;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `products_count` (IN `s` VARCHAR(50))  NO SQL
begin
select p.code,pro_name,gen,p.cate_id,p.unit_id,p.brand_id,cate_name,unit_name,brand_name,serial,qty,price from products p left join stocks sk on p.code=sk.code left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where p.code like s or pro_name like s or gen like s or cate_name like s or unit_name like s or brand_name like s or serial like s or qty like s or price like s order by pro_name ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `product_addr` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select pro_ad,addr_name from product_addr where pro_ad like s or addr_name like s order by addr_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `product_putback_stock` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select pps.code,serial,pps.emp_id,pps.cus_id,pps.form_id,date_back,emp_name,company,stt_accept,status from product_putback_stock pps left join products p on pps.code=p.code left join employee e on pps.emp_id=e.emp_id left join customer c on pps.cus_id=c.cus_id left join form f on pps.form_id=f.form_id where pps.code like s or serial like s or pps.emp_id like s or pps.cus_id like s or pps.form_id like s or date_back like s or emp_name like s or company like s or stt_accept like s or status like s order by pps.code ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `rate` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select rate_id,rate_buy,rate_sell from rate where rate_id like s or rate_buy like s or rate_sell like s order by rate_id ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `rate_count` (IN `s` VARCHAR(50))  NO SQL
begin
select rate_id,rate_buy,rate_sell from rate where rate_id like s or rate_buy like s or rate_sell like s order by rate_id ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `report_dis` (IN `da` DATE, IN `db` DATE, IN `page` INT(5))  NO SQL
begin
select
d.id,d.code,d.serial,d.qty,d.emp_id,d.form_id,d.dis_date,d.dis_time,d.remark,f.form_id,f.amount,f.packing_no,f.stt_accept,f.status,f.form_date,p.pro_name,p.gen,p.img_path,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,e.emp_name,fd.id,fd.qty
from distribute d
left join products p on d.code=p.code left join employee e on d.emp_id=e.emp_id left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join form f on d.form_id=f.form_id left join formdetail fd on d.form_id=fd.form_id
where(dis_date between da and db) order by d.code ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `report_dis_count` (IN `da` DATE, IN `db` DATE)  NO SQL
begin
select
d.id,d.code,d.serial,d.qty,d.emp_id,d.form_id,d.dis_date,d.dis_time,d.remark,f.form_id,f.amount,f.packing_no,f.stt_accept,f.status,f.form_date,p.pro_name,p.gen,p.img_path,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,e.emp_name,fd.id,fd.qty
from distribute d
left join products p on d.code=p.code left join employee e on d.emp_id=e.emp_id left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join form f on d.form_id=f.form_id left join formdetail fd on d.form_id=fd.form_id
where(dis_date between da and db) order by d.code ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `report_pps` (IN `da` DATE, IN `db` DATE, IN `page` INT(5))  NO SQL
begin
select
pps.id,pps.code,pps.serial,pps.qty,pps.emp_id,pps.form_id,pps.date_back,pps.time_back,pps.remark,f.form_id,f.amount,f.packing_no,f.stt_accept,f.status,f.form_date,p.pro_name,p.gen,p.img_path,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,e.emp_name,fd.id,fd.qty
from product_putback_stock pps
left join products p on pps.code=p.code left join employee e on pps.emp_id=e.emp_id left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join form f on pps.form_id=f.form_id left join formdetail fd on pps.form_id=fd.form_id
where(date_back between da and db) order by pps.code ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `report_pps_count` (IN `da` DATE, IN `db` DATE)  NO SQL
begin
select
pps.id,pps.code,pps.serial,pps.qty,pps.emp_id,pps.form_id,pps.date_back,pps.time_back,pps.remark,f.form_id,f.amount,f.packing_no,f.stt_accept,f.status,f.form_date,p.pro_name,p.gen,p.img_path,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,e.emp_name,fd.id,fd.qty
from product_putback_stock pps
left join products p on pps.code=p.code left join employee e on pps.emp_id=e.emp_id left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id left join form f on pps.form_id=f.form_id left join formdetail fd on pps.form_id=fd.form_id
where(date_back between da and db) order by pps.code ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spare_part` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select sp.id,sp.emp_id,sp.code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark from spare_part sp left join employee e on sp.emp_id=e.emp_id left join product p on sp.code=p.code where id like s or sp.emp_id like s or sp.code like s or serial like s or spart_part like s or pro_id like s or pro_serial like s or spare_date like s or spare_time like s or remark like s ORDER BY sp.id ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stocks` (IN `da` DATE, IN `db` DATE, IN `page` INT(5))  begin
select 
sk.sk_id,sk.code,sk.serial,sk.dnv,sk.imp_date,sk.emp_id,emp_name,sk.sup_id,company,rate_buy,rate_sell,qty,p.pro_name,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,p.img_path from stocks sk left join products p on sk.code=p.code left join employee e on sk.emp_id=e.emp_id left join supplier s on sk.sup_id=s.sup_id left join rate r on sk.rate_id=r.rate_id left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where(imp_date between da and db) order by sk.code ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stock_count` (IN `da` DATE, IN `db` DATE)  NO SQL
begin
select 
sk.sk_id,sk.code,sk.serial,sk.dnv,sk.imp_date,sk.emp_id,emp_name,sk.sup_id,company,rate_buy,rate_sell,qty,p.pro_name,p.cate_id,c.cate_name,p.unit_id,u.unit_name,p.brand_id,b.brand_name,p.img_path from stocks sk left join products p on sk.code=p.code left join employee e on sk.emp_id=e.emp_id left join supplier s on sk.sup_id=s.sup_id left join rate r on sk.rate_id=r.rate_id left join category c on p.cate_id=c.cate_id left join unit u on p.unit_id=u.unit_id left join brand b on p.brand_id=b.brand_id where(imp_date between da and db) order by sk.code ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `supplier` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select sup_id,company,tel,fax,address,email,img_path from supplier where sup_id like s or company like s or tel like s or fax like s or address like s or email like s order by company ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `supplier_count` (IN `s` VARCHAR(50))  NO SQL
begin
select sup_id,company,tel,fax,address,email,img_path from supplier where sup_id like s or company like s or tel like s or fax like s or address like s or email like s order by company ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `unit` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select unit_id,unit_name from unit where unit_id like s or unit_name like s order by unit_name ASC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `unit_count` (IN `s` VARCHAR(50))  NO SQL
begin
select unit_id,unit_name from unit where unit_id like s or unit_name like s order by unit_name ASC;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_auther` (`autherid` VARCHAR(20), `authername` VARCHAR(50))  Begin
Update auther set auther_name=authername where auther_id=autherid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_brand` (`brand_id_update` INT(11), `brand_name_update` VARCHAR(50))  begin
update brand set brand_name=brand_name_update where brand_id=brand_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_category` (`cate_id_update` INT(11), `cate_name_update` VARCHAR(50))  begin
Update category set cate_name=cate_name_update where cate_id=cate_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_check_stock` (`id_update` INT(11), `code_update` VARCHAR(30), `serial_update` VARCHAR(30), `qty_update` INT(11), `emp_id_update` VARCHAR(20), `check_date_update` DATE, `check_time_update` TIME, `pro_ad_update` INT(11), `remark_update` VARCHAR(100))  begin
Update check_stock set code=code_update,serial=serial_update,qty=qty_update,emp_id=emp_id_update,check_date=check_date_update,check_time=check_time_update,remark=remark_update where id=id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_customer` (`cus_id_update` VARCHAR(20), `company_update` VARCHAR(50), `tel_update` VARCHAR(30), `address_update` VARCHAR(250), `email_update` VARCHAR(100), `stt_id_update` VARCHAR(20))  begin
Update customer set company=company_update,tel=tel_update,address=address_update,email=email_update,stt_id=stt_id_update where cus_id=cus_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_customer_status` (`stt_id_update` VARCHAR(20), `stt_name_update` VARCHAR(50))  begin
Update customer_status set stt_name=stt_name_update where stt_id=stt_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_distribute` (IN `id_update` INT(11), IN `code_update` VARCHAR(30), IN `serial_update` VARCHAR(30), IN `qty_update` INT(11), IN `emp_id_update` VARCHAR(20), IN `form_id_update` INT(11), IN `dis_date_update` DATE, IN `dis_time_update` TIME, IN `remark_update` VARCHAR(100))  begin
Update distribute set code=code_update,serial=serial_update,qty=qty_update,emp_id=emp_id_update,form_id=form_id_update,dis_date=dis_date_update,dis_time=dis_time_update,remark=remark_update where id=id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_employee` (IN `empid` VARCHAR(20), IN `name` VARCHAR(50), IN `surname` VARCHAR(50), IN `genders` VARCHAR(10), IN `tels` VARCHAR(30), IN `addresst` VARCHAR(250), IN `emails` VARCHAR(100), IN `passw` VARCHAR(100), IN `autherid` VARCHAR(20), IN `sttid` INT, IN `imgpath` VARCHAR(50))  Begin
update employee set emp_name=name,emp_surname=surname,gender=genders,tel=tels,address=addresst,email=emails,pass=passw,auther_id=autherid,stt_id=sttid,img_path=imgpath where emp_id=empid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form` (IN `form_id_update` INT(11), IN `emp_id_update` VARCHAR(20), IN `cus_id_update` VARCHAR(20), IN `amount_update` DECIMAL(11,2), IN `form_date_update` DATE, IN `form_time_update` TIME, IN `stt_accept_update` VARCHAR(50), IN `status_update` VARCHAR(50), IN `usr_acc_update` VARCHAR(50))  begin
Update form set emp_id=emp_id_update,cus_id=cus_id_update,amount=amount_update,form_date=form_date_update,form_time=form_time_update,stt_accept=stt_accept_update,status=status_update,usr_acc=usr_acc_update where form_id=form_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form_detail` (`id_update` INT(11), `code_update` VARCHAR(30), `qty_update` INT(11), `form_id_update` INT(11))  begin
Update formdetail set code=code_update,qty=qty_update,form_id=form_id_update where id=id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_products` (`code_update` VARCHAR(30), `pro_name_update` VARCHAR(50), `gen_update` VARCHAR(50), `cate_id_update` INT(11), `unit_id_update` INT(11), `brand_id_update` INT(11), `qtyalert_update` INT(11), `img_path_update` VARCHAR(50))  begin
Update products set pro_name=pro_name_update,gen=gen_update,cate_id=cate_id_update,unit_id=unit_id_update,brand_id=brand_id_update,qtyalert=qtyalert_update,img_path=img_path_update where code=code_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_product_addr` (`pro_ad_update` INT(11), `addr_name_update` VARCHAR(50))  begin
update product_addr set addr_name=addr_name_update where pro_ad=pro_ad_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_rate` (`rate_id_update` VARCHAR(20), `rate_buy_update` DECIMAL(11,2), `rate_sell_update` DECIMAL(11,2))  begin
Update rate set rate_buy=rate_buy_update, rate_sell=rate_sell_update where rate_id=rate_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_spare_part` (IN `id_update` INT(11), IN `emp_id_update` VARCHAR(20), IN `code_update` VARCHAR(30), IN `serial_update` VARCHAR(30), IN `spare_part_update` VARCHAR(50), IN `pro_id_update` VARCHAR(30), IN `pro_serial_update` VARCHAR(30), IN `spare_date_update` DATE, IN `spare_time_update` TIME, IN `remark_update` VARCHAR(100))  begin
Update spare_part set code=code_update,serial=serial_update,spare_part=spare_part_update,pro_id=pro_id_update,pro_serial=pro_serial_update,spare_date=spare_date_update,spare_time=spare_time_update,remark=remark_update where id=id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_supplier` (`sup_id_update` VARCHAR(20), `company_update` VARCHAR(50), `tel_update` VARCHAR(30), `fax_update` VARCHAR(30), `address_update` VARCHAR(250), `email_update` VARCHAR(100), `img_path_update` VARCHAR(50))  begin
Update supplier set company=company_update,tel=tel_update,fax=fax_update,address=address_update,email=email_update,img_path=img_path_update where sup_id=sup_id_update;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_unit` (`unit_id_update` INT(11), `unit_name_update` VARCHAR(50))  begin
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
('010', 'Service'),
('23541t', '234c60dd4c1ea81bb996441deb8f04d5');

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
(10, 'ປິນເຕີ'),
(11, 'ສະແກນເນີ້'),
(12, 'ເຄື່ອງພິມບັດ'),
(13, 'ຖົງຝຸ່ນ'),
(14, 'ບັດຂາວ'),
(15, 'ບັດຂາວມີລະຫັດ'),
(16, 'ລິບບ່ອນຟີມ'),
(17, 'ສາຍແພ'),
(18, 'ດຳ້'),
(19, 'ເວບໂທນເນີ');

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
('SD002', '(001) AGL ຕຶກ ANZ ຊັ້ນ7, ສາຫັດສະດີ', '0', 'ຕຶກ ANZ ຊັ້ນ7, ສາຫັດສະດີ', 'ຕຶກ ANZ ຊັ້ນ7, ສາຫັດສະດີ', '002'),
('SD002.1', '(308) AGL ຊັນ3 ພະແກນການຄ້າ', '0', 'ຊັນ3 ພະແກນການຄ້າ', 'ຊັນ3 ພະແກນການຄ້າ', '002'),
('SD002.2', '(309) AGL ຕຶກ ANZ ຊັ້ນ2', '0', 'ຕຶກ ANZ ຊັ້ນ2', 'ຕຶກ ANZ ຊັ້ນ2', '002'),
('SD005', '(004) ບີ​ຄອບ​ເພີ​ເຣດ ​ເອັກ​ປອດ ຈຳກັດພຽງຜູ້ດຽວ', '0', '4 ແຍກ ທາງໄປລາດຄວາຍ', '4 ແຍກ ທາງໄປລາດຄວາຍ', '002'),
('SD005.1', '(005) ບີ​ຄອບ​ເພີ​ເຣດ ​ເອັກ​ປອດ ຈຳກັດພຽງຜູ້ດຽວ', '0', '4 ແຍກ ທາງໄປລາດຄວາຍ', '4 ແຍກ ທາງໄປລາດຄວາຍ', '002'),
('SD006', '(006) Bangkok Bank  ທາດດຳຊັ້ນ2', '0', 'ທາດດຳຊັ້ນ2', 'ທາດດຳຊັ້ນ2', '002'),
('SD006.1', '(007) Bangkok Bank  ທາດດຳ ຫຼັງ', '0', 'ທາດດຳ ຫຼັງເຄົ້າເຕີ', 'ທາດດຳ ຫຼັງເຄົ້າເຕີ', '002'),
('SD008', '(010) ບໍລິສັດ ເບທາໂກ (ລາວ) ຈຳກັດຜູ້ດຽວ ( ບ້ານນາຂ່າ', '0', '( ບ້ານນາຂ່າ )', '( ບ້ານນາຂ່າ )', '002'),
('SD008.1', '(008) ບໍລິສັດ ເບທາໂກ (ລາວ) ຈຳກັດຜູ້ດຽວ ບ້ານຮ່ອງແກ', '0', 'ບ້ານຮ່ອງແກ', 'ບ້ານຮ່ອງແກ', '002'),
('SD008.2', '(208) ບໍລິສັດ ເບທາໂກ (ລາວ) ຈໍາກັດຜດຽວ', '0', 'ປາກເຊ Shop', 'ປາກເຊ Shop', '002'),
('SD008.3', '(208) ບໍລິສັດ ເບທາໂກ (ລາວ) ຈຳກັດຜູ້ດຽວ', '0', 'ສາຂາ ປາກເຊ', 'ສາຂາ ປາກເຊ', '002'),
('SD008.4', '(011) ບໍລິສັດ ເບທາໂກ (ລາວ)  ສາຂານາຊາຍທອງ', '0', 'ສາຂານາຊາຍທອງ', 'ສາຂານາຊາຍທອງ', '002'),
('SD008.5', '(170) ບໍລິສັດ ເບທາໂກ (ລາວ) ຈຳກັດຜູ້ດຽວ', '0', 'ສາຂາ ບ້ານໜອງບົວເມືອງສັງທອງ 90km', 'ສາຂາ ບ້ານໜອງບົວເມືອງສັງທອງ 90km', '002'),
('SD010', '(013) ບໍລິສັດ ຊີ​.ພີ. ລາວ  ໂພນທັນ ຊັ້ນ1 ຫ້ອງການເງີ', '0', 'ໂພນທັນ ຊັ້ນ1 ຫ້ອງການເງີນ - ສາຂາ ນະຄອນຫຼວງວຽງຈັນ', 'ໂພນທັນ ຊັ້ນ1 ຫ້ອງການເງີນ - ສາຂາ ນະຄອນຫຼວງວຽງຈັນ', '002'),
('SD010.1', '(164) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ', '0', 'ໂພນທັນ ຊັ້ນ1 ຫ້ອງບໍລິຫານ', 'ໂພນທັນ ຊັ້ນ1 ຫ້ອງບໍລິຫານ', '002'),
('SD010.2', '(016) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ ທ່າງ່ອນຫ້ອງການເງິນ', '0', 'ທ່າງ່ອນຫ້ອງການເງິນ', 'ທ່າງ່ອນຫ້ອງການເງິນ', '002'),
('SD010.3', '(017) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ ທ່າງ່ອນຫ້ອງຕາຊັງ', '0', 'ທ່າງ່ອນຫ້ອງຕາຊັງ', 'ທ່າງ່ອນຫ້ອງຕາຊັງ', '002'),
('SD010.4', '(018) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ  ສາຂາປາກເຊ', '0', 'ສາຂາປາກເຊ', 'ສາຂາປາກເຊ', '002'),
('SD010.5', '(310) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ', '0', 'ສາຂາ ສະຫວັນນະເຂດ', 'ສາຂາ ສະຫວັນນະເຂດ', '002'),
('SD010.6', '(113) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ', '0', 'ທ່າງ່ອນຫ້ອງການເງິນ', 'ທ່າງ່ອນຫ້ອງການເງິນ', '002'),
('SD010.7', '(019) ບໍລິສັດ ຊີ​.ພີ. ລາວ ຈຳກັດ ສາຂາປາກເຊ', '0', 'ສາຂາປາກເຊ', 'ສາຂາປາກເຊ', '002'),
('SD011', '(022) DATACOM Co., LTD', '0', 'ໂພນໄຊ', 'ໂພນໄຊ', '002'),
('SD012', '(023) Deloitte (Lao)  ຕະຫຼາດຫຼັກຊັບ ຊັ້ນ 3', '0', 'ຕະຫຼາດຫຼັກຊັບ ຊັ້ນ 3', 'ຕະຫຼາດຫຼັກຊັບ ຊັ້ນ 3', '002'),
('SD013', '(024) DFDL', '0', 'ເດີ່ນສະຕ໋າດ // ສະລອຍນ້ຳ', 'ເດີ່ນສະຕ໋າດ // ສະລອຍນ້ຳ', '002'),
('SD014', '(025) DHL ໂພນຕ້ອງ ຊັ້ນ1', '0', 'ໂພນຕ້ອງ ຊັ້ນ1', 'ໂພນຕ້ອງ ຊັ້ນ1', '002'),
('SD014.1', '(026) DHL ສາງເດີ່ນບິນ', '0', 'ສາງເດີ່ນບິນ', 'ສາງເດີ່ນບິນ', '002'),
('SD014.2', '(027) DHL ໂພນຕ້ອງ ກາຍ GM TECH ໄປທາງ150 ຕຽງ ຊັ້ນ2', '0', 'ໂພນຕ້ອງ ກາຍ GM TECH ໄປທາງ150 ຕຽງ ຊັ້ນ2', 'ໂພນຕ້ອງ ກາຍ GM TECH ໄປທາງ150 ຕຽງ ຊັ້ນ2', '002'),
('SD014.3', '(028) DHL ໂພນຕ້ອງ ຊັ້ນ1', '0', 'ໂພນຕ້ອງ ຊັ້ນ1', 'ໂພນຕ້ອງ ຊັ້ນ1', '002'),
('SD015', '(304) MASCENA Co., LTD', '0', 'ຫ້ອງທາງຫຼັງ ການເງິນ', 'ຫ້ອງທາງຫຼັງ ການເງິນ', '002'),
('SD015.1', '(328) MASCENA Co., LTD', '0', 'ພະແນກຕ້ອນຮັບ', 'ພະແນກຕ້ອນຮັບ', '002'),
('SD017', '(031) EMBASSY OF TIMOR LESTE', '0', 'ຕໍ່ໜ້າຕຶກວຽງວັງ ໂພນສີນວນ', 'ຕໍ່ໜ້າຕຶກວຽງວັງ ໂພນສີນວນ', '002'),
('SD018', '(032) EssilorEssilor  ສະຫວັນນະເຂດ', '0', 'ສະຫວັນນະເຂດ', 'ສະຫວັນນະເຂດ', '002'),
('SD019', 'GM TECH', '0', '', '', '002'),
('SD021', '(033) ICRC', '0', 'ຂ້າງໂຮງຮຽນສີນໄຊ', 'ຂ້າງໂຮງຮຽນສີນໄຊ', '002'),
('SD022', 'MR. VISATHONE', '0', '', '', '002'),
('SD023', 'IOM (UNDP)', '0', '', '', '002'),
('SD024', '(035) ISUZU LAO SERVICES SOLE CO., LTD', '0', 'Ban Nalow', 'Ban Nalow', '002'),
('SD025', '(036) I-TECC ຕຶກເກົ່າຊັ້ນ 2', '0', 'ຕຶກເກົ່າຊັ້ນ 2', 'ຕຶກເກົ່າຊັ້ນ 2', '002'),
('SD025.1', '(037) I-TECC  ໄອເຕັກ ທົ່ງຂັນຄຳ ຊັນ3', '0', 'ໄອເຕັກ ທົ່ງຂັນຄຳ ຊັນ3', 'ໄອເຕັກ ທົ່ງຂັນຄຳ ຊັນ3', '002'),
('SD025.2', '(038) I-TECC  ໄອເຕັກ ໂພນທັນຕຶກເກົ່າ', '0', 'ໄອເຕັກ ໂພນທັນຕຶກເກົ່າ', 'ໄອເຕັກ ໂພນທັນຕຶກເກົ່າ', '002'),
('SD028', '(039) Khong View', '0', 'ແຖວແຄມຂອງ ບ້ານຂຸນຕາຊັ້ນ2', 'ແຖວແຄມຂອງ ບ້ານຂຸນຕາຊັ້ນ2', '002'),
('SD029', '(041) KP COMPANY LTD ສີໄຄ ພະແນກບັນຊີ  ຊັ້ນ1', '0', 'ສີໄຄ ພະແນກບັນຊີ  ຊັ້ນ1', 'ສີໄຄ ພະແນກບັນຊີ  ຊັ້ນ1', '002'),
('SD029.1', '(042) KP Company Ltd  ແຖວໄຟແດງໂພນສີນວນ ຊັ້ນ2', '0', 'ແຖວໄຟແດງໂພນສີນວນ ຊັ້ນ2', 'ແຖວໄຟແດງໂພນສີນວນ ຊັ້ນ2', '002'),
('SD029.2', '(052) KP Company Ltd', '0', 'ສີໃຄ ຊັນ2', 'ສີໃຄ ຊັນ2', '002'),
('SD030', '(043) Krungsri  ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No1)', '0', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No1)', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No1)', '002'),
('SD030.1', '(044) Krungsri 450 ປີ  ຊັ້ນ2', '0', '450 ປີ  ຊັ້ນ2', '450 ປີ  ຊັ້ນ2', '002'),
('SD030.10', '(064) Krungsri Leasing Services Company Limited', '0', 'ປາກເຊ ສໍານັກງານໃຫ່ຍ', 'ປາກເຊ ສໍານັກງານໃຫ່ຍ', '002'),
('SD030.11', '(290) Krungsri Leasing Services Company Limited', '0', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ3 ຕຶກໃຫມ', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ3 ຕຶກໃຫມ', '002'),
('SD030.12', '(292) Krungsri Leasing Services Company Limited', '0', 'ສະຖາບັນການເງິນຈລະພາກ ບໍຮັບເງິນຝາກ ກງສີຈໍາກັດ (ຕຶກໃໝ)', 'ສະຖາບັນການເງິນຈລະພາກ ບໍຮັບເງິນຝາກ ກງສີຈໍາກັດ (ຕຶກໃໝ)', '002'),
('SD030.13', '(336) Krungsri Leasing Services Company Limited', '0', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ3 ຕຶກໃຫມ', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ3 ຕຶກໃຫມ', '002'),
('SD030.2', '(045) Krungsri ສາຂາ ໂຄລາວໜອງບອນຊັ້ນ2', '0', 'ສາຂາ ໂຄລາວໜອງບອນຊັ້ນ2', 'ສາຂາ ໂຄລາວໜອງບອນຊັ້ນ2', '002'),
('SD030.3', '(047) Krungsri Leasing Services Company Limited', '0', 'ສາຂາ ໂຄລາວ T2 ຕຶກkia', 'ສາຂາ ໂຄລາວ T2 ຕຶກkia', '002'),
('SD030.4', '(048) Krungsri Leasing Services Company Limited', '0', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No3)', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No3)', '002'),
('SD030.5', '(345) Krungsri Leasing Services Company Limited', '0', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No2)', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ1 (No2)', '002'),
('SD030.6', '(260) Krungsri Leasing Services Company Limited', '0', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ2', 'ສໍານັກງານໃຫຍໂພນທັນຊັນ2', '002'),
('SD030.7', '(053) Krungsri Leasing ເຊົ່າ SCAN ຢ່າງດຽວ ໄລຍະເວລາ', '0', 'ເຄື່ອງນີ້  ເຊົ່າ SCAN ຢ່າງດຽວ ໄລຍະເວລາ 1 ປີ', 'ເຄື່ອງນີ້  ເຊົ່າ SCAN ຢ່າງດຽວ ໄລຍະເວລາ 1 ປີ', '002'),
('SD030.8', '(054) Krungsri Leasing Services Company Limited', '0', 'ເຄື່ອງນີ້  ເຊົ່າ SCAN ຢ່າງດຽວ ໄລຍະເວລາ 1 ປີ', 'ເຄື່ອງນີ້  ເຊົ່າ SCAN ຢ່າງດຽວ ໄລຍະເວລາ 1 ປີ', '002'),
('SD030.9', '(058) Krungsri Leasing Services Company Limited', '0', 'ແຂວງ ອຸດົມໄຊ', 'ແຂວງ ອຸດົມໄຊ', '002'),
('SD031', '(066) LAO AIRLINES ພະແນກ ບຳລຸງຮັກສາ,  ພະແນກ CAMO', '0', 'ພະແນກ ບຳລຸງຮັກສາ,  ພະແນກ CAMO', 'ພະແນກ ບຳລຸງຮັກສາ,  ພະແນກ CAMO', '002'),
('SD031.1', '(069) LAO AIRLINES ( ພະແນກປະຕິບັດການບິນ ຫ້ອງທີ 1 ຊ', '0', '( ພະແນກປະຕິບັດການບິນ ຫ້ອງທີ 1 ຊັ້ນທີ 2 )', '( ພະແນກປະຕິບັດການບິນ ຫ້ອງທີ 1 ຊັ້ນທີ 2 )', '002'),
('SD031.10', '(080) LAO AIRLINES ຫ້ອງຂາຍປີ້', '0', 'ຫ້ອງຂາຍປີ້', 'ຫ້ອງຂາຍປີ້', '002'),
('SD031.11', '(081) LAO AIRLINES ປາງຄຳຊັ້ນ 5', '0', 'ປາງຄຳຊັ້ນ 5', 'ປາງຄຳຊັ້ນ 5', '002'),
('SD031.12', '(082) LAO AIRLINES ເດີ່ນບິນ ຊັ້ນ1, ພະແນກເຕັກນິກອອາ', '0', 'ເດີ່ນບິນ ຊັ້ນ1, ພະແນກເຕັກນິກອອາໄຫຼ່', 'ເດີ່ນບິນ ຊັ້ນ1, ພະແນກເຕັກນິກອອາໄຫຼ່', '002'),
('SD031.13', '(083) LAO AIRLINES CAMO ຊັ້ນ2, ຂະແໜງ IT zone ແປງຍົ', '0', 'CAMO ຊັ້ນ2, ຂະແໜງ IT zone ແປງຍົນ', 'CAMO ຊັ້ນ2, ຂະແໜງ IT zone ແປງຍົນ', '002'),
('SD031.14', '(084) LAO AIRLINES ພະແນກຝຶກອົບຮົມ ຊັ້ນ2', '0', 'ພະແນກຝຶກອົບຮົມ ຊັ້ນ2', 'ພະແນກຝຶກອົບຮົມ ຊັ້ນ2', '002'),
('SD031.15', '(085) LAO AIRLINES ( ພະແນກບໍລິຫານພາກພຶ້ນດິນ Gop ຫ້', '0', '( ພະແນກບໍລິຫານພາກພຶ້ນດິນ Gop ຫ້ອງ 107 )', '( ພະແນກບໍລິຫານພາກພຶ້ນດິນ Gop ຫ້ອງ 107 )', '002'),
('SD031.16', '(125) LAO AIRLINES ສະໜາມບິນຫຼວງພະບາງ 01', '0', 'ສະໜາມບິນຫຼວງພະບາງ 01', 'ສະໜາມບິນຫຼວງພະບາງ 01', '002'),
('SD031.17', '(235) LAO AIRLINES ຕືກບໍລິຫານ ຊັ້ນ 3 ພະແນກການເງິນ', '0', 'ຕືກບໍລິຫານ ຊັ້ນ 3 ພະແນກການເງິນ', 'ຕືກບໍລິຫານ ຊັ້ນ 3 ພະແນກການເງິນ', '002'),
('SD031.18', '(087) LAO AIRLINES ສະໜາມບິນຫຼວງພະບາງ 02', '0', 'ສະໜາມບິນຫຼວງພະບາງ 02', 'ສະໜາມບິນຫຼວງພະບາງ 02', '002'),
('SD031.19', '(088) LAO AIRLINES ໂຮງແຮມເມືອງທອງ', '0', 'ໂຮງແຮມເມືອງທອງ', 'ໂຮງແຮມເມືອງທອງ', '002'),
('SD031.2', '(070) LAO AIRLINES ( ພະແນກພາກພຶ້ນດິນ ) ຫ້ອງແຈ້ງປີ້', '0', '( ພະແນກພາກພຶ້ນດິນ ) ຫ້ອງແຈ້ງປີ້', '( ພະແນກພາກພຶ້ນດິນ ) ຫ້ອງແຈ້ງປີ້', '002'),
('SD031.20', '(089) LAO AIRLINES ( ພະແນກບຸກຂະລາກອນ ຕືກບໍລິຫານຊັ້', '0', '( ພະແນກບຸກຂະລາກອນ ຕືກບໍລິຫານຊັ້ນ 3 )', '( ພະແນກບຸກຂະລາກອນ ຕືກບໍລິຫານຊັ້ນ 3 )', '002'),
('SD031.21', '(090) LAO AIRLINES ຫອງ ຂາຍປີ', '0', 'ຫອງ ຂາຍປີ', 'ຫອງ ຂາຍປີ', '002'),
('SD031.22', '(091) LAO AIRLINES ສາຂາຫຼວງນໍ້າທາ', '0', 'ສາຂາຫຼວງນໍ້າທາ', 'ສາຂາຫຼວງນໍ້າທາ', '002'),
('SD031.23', '(311) LAO AIRLINES ( ສາຂາ ແຂວງຫຼວງພະບາງ ຂາຍປີ້ )', '0', '( ສາຂາ ແຂວງຫຼວງພະບາງ ຂາຍປີ້ )', '( ສາຂາ ແຂວງຫຼວງພະບາງ ຂາຍປີ້ )', '002'),
('SD031.24', '(094) LAO AIRLINES ສາຂາຈໍາປາສັກ', '0', 'ສາຂາຈໍາປາສັກ', 'ສາຂາຈໍາປາສັກ', '002'),
('SD031.25', '(312) LAO AIRLINES ສາຂາ ແຂວງ ຈໍາປາສັກ', '0', 'ສາຂາ ແຂວງ ຈໍາປາສັກ', 'ສາຂາ ແຂວງ ຈໍາປາສັກ', '002'),
('SD031.26', '(294) Lao airlines ອຸດົມໄຊ', '0', 'ອຸດົມໄຊ', 'ອຸດົມໄຊ', '002'),
('SD031.27', '(313) LAO AIRLINES ຕືກບໍລິຫານ ຊັ້ນ 3 ພະແນກການເງິນ', '0', 'ຕືກບໍລິຫານ ຊັ້ນ 3 ພະແນກການເງິນ', 'ຕືກບໍລິຫານ ຊັ້ນ 3 ພະແນກການເງິນ', '002'),
('SD031.28', '(331) LAO AIRLINES ພະແນກໂພສະນາການ', '0', 'ພະແນກໂພສະນາການ', 'ພະແນກໂພສະນາການ', '002'),
('SD031.29', 'Lao airlines ພະແນກພາພືນດິນ', '0', 'ພະແນກພາພືນດິນ', 'ພະແນກພາພືນດິນ', '002'),
('SD031.3', '(072) LAO AIRLINES QA ພະແນກເຕັກນິກພາກພື້ນດິນ', '0', 'QA ພະແນກເຕັກນິກພາກພື້ນດິນ', 'QA ພະແນກເຕັກນິກພາກພື້ນດິນ', '002'),
('SD031.4', '(073) LAO AIRLINES ພະແນກ ຝາກເຄີືອງ', '0', 'ພະແນກ ຝາກເຄີືອງ', 'ພະແນກ ຝາກເຄີືອງ', '002'),
('SD031.5', '(074) LAO AIRLINES ພະແນກແຜ່ນການ-ການຕະຫຼາດຊັ້ນ4ລາວແ', '0', 'ພະແນກແຜ່ນການ-ການຕະຫຼາດຊັ້ນ4ລາວແອລາຍປາງຄຳ', 'ພະແນກແຜ່ນການ-ການຕະຫຼາດຊັ້ນ4ລາວແອລາຍປາງຄຳ', '002'),
('SD031.6', '(075) LAO AIRLINES ວີສະວະກຳ ຊັ້ນ2', '0', 'ວີສະວະກຳ ຊັ້ນ2', 'ວີສະວະກຳ ຊັ້ນ2', '002'),
('SD031.7', '(076) LAO AIRLINES SQS ຊັ້ນ2 ພະແນກກວດກາຄນະພາບ', '0', 'SQS ຊັ້ນ2 ພະແນກກວດກາຄນະພາບ', 'SQS ຊັ້ນ2 ພະແນກກວດກາຄນະພາບ', '002'),
('SD031.8', '(077) LAO AIRLINES ປາງຄໍາຊັນ 5 ພະແນກການຄາ', '0', 'ປາງຄໍາຊັນ 5 ພະແນກການຄາ', 'ປາງຄໍາຊັນ 5 ພະແນກການຄາ', '002'),
('SD031.9', '(078) LAO AIRLINES ພະແນກ ສະໜອງອາໄຫຼ່', '0', 'ພະແນກ ສະໜອງອາໄຫຼ່', 'ພະແນກ ສະໜອງອາໄຫຼ່', '002'),
('SD033', '(095) ບໍລິສັດລາວ ໂກຣເບີນເອັນຈີເນຍລິງຄອນຊາວຕັນ', '0', 'ສີສະຫວາດ', 'ສີສະຫວາດ', '002'),
('SD034', 'LAO TELECOM', '0', '', '', '002'),
('SD036', '(325) LDC IMPORT-EXPORT CO., LTD', '0', 'ຊັ້ນ2 ຂ້າງຫ້ອງໄອທີ', 'ຊັ້ນ2 ຂ້າງຫ້ອງໄອທີ', '002'),
('SD036.1', '(100) LDC IMPORT-EXPORT CO., LTD', '0', 'ຕານມີໄຊ( ພະແນກສາງ )', 'ຕານມີໄຊ( ພະແນກສາງ )', '002'),
('SD037', '(101) LNCCI ຫຼັກ5', '0', 'ຫຼັກ5', 'ຫຼັກ5', '002'),
('SD037.1', '(102) LNCCI', '0', 'ຫຼັກ5', 'ຫຼັກ5', '002'),
('SD038', 'Lao Lottery Development No.3', '0', '', '', '002'),
('SD039', '(216) ໂຮງພິມມັນທາຕຸລາດ', '0', '', '', '002'),
('SD041', 'ກະຊວງ​ພະລັງງານ ​ແລະ ບໍ່​ແຮ່', '0', '', '', '002'),
('SD043', '(106) ທ່ານ ຈັນທະໄລ ອອ່ນລັງສີ', '0', '', '', '002'),
('SD046', '(107) MSIG Insurance Co., Ltd', '0', 'ໂພນທັນ', 'ໂພນທັນ', '002'),
('SD049', 'Pakpasak Kanphim', '0', '', '', '002'),
('SD050', '(109) Panyathip Advertising', '0', 'ໂສກປາຫຼວງ ແຖວໄຟຟ້າ', 'ໂສກປາຫຼວງ ແຖວໄຟຟ້າ', '002'),
('SD051', '(110) ໂຮງຮຽນ ປັນຍາທິບ', '0', 'ອະນຸບານ', 'ອະນຸບານ', '002'),
('SD051.1', '(112) ໂຮງຮຽນ ປັນຍາທິບ', '0', 'ສະພານທອງຕຶກມັດທະຍົມ', 'ສະພານທອງຕຶກມັດທະຍົມ', '002'),
('SD051.2', '(114) ໂຮງຮຽນ ປັນຍາທິບ', '0', 'ສະພານທອງຕຶກມັດທະຍົມ', 'ສະພານທອງຕຶກມັດທະຍົມ', '002'),
('SD051.3', '(299) ໂຮງຮຽນ ປັນຍາທິບ', '0', 'ສະພານທອງຕຶກມັດທະຍົມ', 'ສະພານທອງຕຶກມັດທະຍົມ', '002'),
('SD051.4', '(314) ສະພານທອງຕຶກມັດທະຍົມ', '0', 'ສະພານທອງຕຶກອະນບານ', 'ສະພານທອງຕຶກອະນບານ', '002'),
('SD052', '(115) Petroleum Trading  ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ1', '0', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ1', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ1', '002'),
('SD052.1', '(116) Petroleum Trading Lao ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ6', '0', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ6', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ6', '002'),
('SD053', '(117) ທະນາຄານ ພົງສະຫວັນ  ສາຂາ     ຕະຫຼາດເຊົ້າ', '0', 'ສາຂາ     ຕະຫຼາດເຊົ້າ', 'ສາຂາ     ຕະຫຼາດເຊົ້າ', '002'),
('SD053.1', '(118) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນ7', '0', 'ພົງສະຫວັນ7 ຊັ້ນ3 ຕຶກບໍລິຫານ ການເງີນ', 'ພົງສະຫວັນ7 ຊັ້ນ3 ຕຶກບໍລິຫານ ການເງີນ', '002'),
('SD053.10', '(129) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນ TELLER ສາຂາຂູນຕາ', '0', 'ພົງສະຫວັນ TELLER ສາຂາຂູນຕາ ຊັ້ນພົງສະຫວັນຫຼັກ 7  ພະແນກສິນເຊື່ອ1', 'ພົງສະຫວັນ TELLER ສາຂາຂູນຕາ ຊັ້ນພົງສະຫວັນຫຼັກ 7  ພະແນກສິນເຊື່ອ1', '002'),
('SD053.11', '(130) ທະນາຄານ ພົງສະຫວັນ NONSAVANG', '0', 'PHONGSAVANH NONSAVANG', 'PHONGSAVANH NONSAVANG', '002'),
('SD053.12', '(131) ທະນາຄານ ພົງສະຫວັນ ຫນອງດ້ວງ', '0', 'ພົງສະຫວັນ ຫນອງດ້ວງ', 'ພົງສະຫວັນ ຫນອງດ້ວງ', '002'),
('SD053.13', '(132) ທະນາຄານ ພົງສະຫວັນ PHONTAN', '0', 'ພົງສະຫວັນ PHONTAN', 'ພົງສະຫວັນ PHONTAN', '002'),
('SD053.14', '(133) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນຂຸນຕາ ຊັ້ນ2', '0', 'ພົງສະຫວັນຂຸນຕາ ຊັ້ນ2', 'ພົງສະຫວັນຂຸນຕາ ຊັ້ນ2', '002'),
('SD053.15', '(134)ທະນາຄານ ພົງສະຫວັນ ສາລະຄຳ', '0', 'ພົງສະຫວັນ ສາລະຄຳ', 'ພົງສະຫວັນ ສາລະຄຳ', '002'),
('SD053.16', '(067) ທະນາຄານພົງສະຫວັນ  ສາມແສນໄທ ພະແນກ CRS', '0', 'ສາມແສນໄທ ພະແນກ CRS', 'ສາມແສນໄທ ພະແນກ CRS', '002'),
('SD053.17', '(274) ທະນາຄານ ພົງສະຫວັນ ຂົວມີດຕະພາບ ໜ ວຍບໍລິການ', '0', 'ພົງສະຫວັນຂົວມີດຕະພາບ ໜ ວຍບໍລິການ', 'ພົງສະຫວັນຂົວມີດຕະພາບ ໜ ວຍບໍລິການ', '002'),
('SD053.18', '(136) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນຫຼັກ 7', '0', '10. ພົງສະຫວັນຫຼັກ 7 - Teller ( 020 2222 3862 ດາລາວັນ', '10. ພົງສະຫວັນຫຼັກ 7 - Teller ( 020 2222 3862 ດາລາວັນ', '002'),
('SD053.19', '(138) ທະນາຄານ ພົງສະຫວັນ ຫ້ອງການເງິນຊັ້ນ 2', '0', 'ຫ້ອງການເງິນຊັ້ນ 2', 'ຫ້ອງການເງິນຊັ້ນ 2', '002'),
('SD053.2', 'ທະນາຄານ ພົງສະຫວັນ ສາມແສນໃທ Teller 2', '0', 'ພົງສະຫວັນສາມແສນໃທ Teller 2', 'ພົງສະຫວັນສາມແສນໃທ Teller 2', '002'),
('SD053.3', 'ທະນາຄານ ພົງສະຫວັນ ສາມແສນໃທ ຊັ້ນ2 CSR', '0', 'ພົງສະຫວັນສາມແສນໃທ ຊັ້ນ2 CSR', 'ພົງສະຫວັນສາມແສນໃທ ຊັ້ນ2 CSR', '002'),
('SD053.4', '(122) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນຫຼັກ 7  ພະແນກສິນເ', '0', 'ພົງສະຫວັນຫຼັກ 7  ພະແນກສິນເຊື່ອ', 'ພົງສະຫວັນຫຼັກ 7  ພະແນກສິນເຊື່ອ', '002'),
('SD053.5', '(123) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນສາມແສນໃທພະແນກສິນເ', '0', 'ພົງສະຫວັນສາມແສນໃທພະແນກສິນເຊື່ອຊັ້ນ3', 'ພົງສະຫວັນສາມແສນໃທພະແນກສິນເຊື່ອຊັ້ນ3', '002'),
('SD053.6', '(124) ທະນາຄານ ພົງສະຫວັນ ສາມແສນໃທ ຊັ້ນ4 ສູນບໍລິການລ', '0', 'ພົງສະຫວັນສາມແສນໃທ ຊັ້ນ4 ສູນບໍລິການລູກຄ້າທຸລະກິດ', 'ພົງສະຫວັນສາມແສນໃທ ຊັ້ນ4 ສູນບໍລິການລູກຄ້າທຸລະກິດ', '002'),
('SD053.7', '(126) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນ7 ຫນ້າຫ້ອງການເງິນ', '0', 'ພົງສະຫວັນ7 ຫນ້າຫ້ອງການເງິນ ຊັ້ນ2', 'ພົງສະຫວັນ7 ຫນ້າຫ້ອງການເງິນ ຊັ້ນ2', '002'),
('SD053.8', '(127) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນ7 E-banking', '0', 'ພົງສະຫວັນ7 E-banking', 'ພົງສະຫວັນ7 E-banking', '002'),
('SD053.9', '(128) ທະນາຄານ ພົງສະຫວັນ ພົງສະຫວັນ7 ຕຶກໄມ້ ຊັ້ນ2', '0', 'ພົງສະຫວັນ7 ຕຶກໄມ້ ຊັ້ນ2', 'ພົງສະຫວັນ7 ຕຶກໄມ້ ຊັ້ນ2', '002'),
('SD055', '(140) Mລັດວິສາຫະກິດ ໄປສະນີລາວ ພະແນກເມດວ່ນພິເສດ2 ຊັ', '0', 'ພະແນກເມດວ່ນພິເສດ2 ຊັ້ນ5', 'ພະແນກເມດວ່ນພິເສດ2 ຊັ້ນ5', '002'),
('SD055.1', '(142) ລັດວິສາຫະກິດ ໄປສະນີລາວ ຂ້າງຫ້ອງສະຖາບັນເງິນຝາ', '0', 'ຂ້າງຫ້ອງສະຖາບັນເງິນຝາກຊັ້ນ2', 'ຂ້າງຫ້ອງສະຖາບັນເງິນຝາກຊັ້ນ2', '002'),
('SD055.2', '(143) ລັດວິສາຫະກິດ ໄປສະນີລາວ ໜ້າຕະຫຼາດເຊົ້າຊັ້ນ4  ', '0', 'ໜ້າຕະຫຼາດເຊົ້າຊັ້ນ4  ຂ້າງຫ້ອງໄອທີ', 'ໜ້າຕະຫຼາດເຊົ້າຊັ້ນ4  ຂ້າງຫ້ອງໄອທີ', '002'),
('SD055.3', '(144) ລັດວິສາຫະກິດ ໄປສະນີລາວ ສາຍລົມ', '0', 'ສາຍລົມ', 'ສາຍລົມ', '002'),
('SD058', '(145) Savanh Pacifca Development Co., Ltd', '0', 'ແຂວງ ສະຫວັນນະເຂດ', 'ແຂວງ ສະຫວັນນະເຂດ', '002'),
('SD059', 'ໂຮງພີມສະຫວ່າງ', '0', '', '', '002'),
('SD060', '(147) SCHNEIDER', '0', 'ຕຶກວຽງວັງ ຊັ້ນ5', 'ຕຶກວຽງວັງ ຊັ້ນ5', '002'),
('SD061', '(148) SINOOK COFFEE', '0', 'ສົມຫວັງ', 'ສົມຫວັງ', '002'),
('SD067', '(150) TOBACCO LAO ການຕະຫຼາດຊັ້ນ1', '0', 'ການຕະຫຼາດຊັ້ນ1', 'ການຕະຫຼາດຊັ້ນ1', '002'),
('SD067.1', '(151) TOBACCO LAO ຫອງການບໍລິຫານຊັ້ນ2', '0', 'ຫອງການບໍລິຫານຊັ້ນ2', 'ຫອງການບໍລິຫານຊັ້ນ2', '002'),
('SD067.2', '(152) TOBACCO LAO ພະແນກໃບຢາ', '0', 'ພະແນກໃບຢາ', 'ພະແນກໃບຢາ', '002'),
('SD067.3', '(153) TOBACCO LAO ພະແນກໃບຢາ', '0', 'ພະແນກໃບຢາ', 'ພະແນກໃບຢາ', '002'),
('SD067.4', '(154) TOBACCO LAO ພະແນກ HR ຊັ້ນ 1', '0', 'ພະແນກ HR ຊັ້ນ 1', 'ພະແນກ HR ຊັ້ນ 1', '002'),
('SD067.5', '(155) TOBACCO LAO ຫອງບໍລິຫານຝາຍໂຮງງານຊັ້ນ2', '0', 'ຫອງບໍລິຫານຝາຍໂຮງງານຊັ້ນ2', 'ຫອງບໍລິຫານຝາຍໂຮງງານຊັ້ນ2', '002'),
('SD067.6', '(156) TOBACCO LAO ສາຂາຫຼວງພະບາງ', '0', 'ສາຂາຫຼວງພະບາງ', 'ສາຂາຫຼວງພະບາງ', '002'),
('SD067.7', '(157) TOBACCO LAO ສາຂາສະຫວັນນະເຂດ', '0', 'ສາຂາສະຫວັນນະເຂດ', 'ສາຂາສະຫວັນນະເຂດ', '002'),
('SD067.8', '(158) TOBACCO LAO ສາຂາ ຈຳປາສັກ', '0', 'ສາຂາ ຈຳປາສັກ', 'ສາຂາ ຈຳປາສັກ', '002'),
('SD068', '(159) Unilever Services (Lao) Sole Co., Ltd', '0', 'ຕຶກວຽງວັງ ຊັ້ນ4', 'ຕຶກວຽງວັງ ຊັ້ນ4', '002'),
('SD069', '(160) URAI PHANICH (LAO) CO., LTD', '0', 'ສາຂາໂພນໄຊ', 'ສາຂາໂພນໄຊ', '002'),
('SD069.1', '(161) URAI PHANICH (LAO) CO., LTD', '0', 'ບ້ານສົມສະໜຸກ ທາງເຂົ້າໂຮງງານພຶດສະພາ ຢູ່ຫ້ອງຄັງສິນຄ້າ', 'ບ້ານສົມສະໜຸກ ທາງເຂົ້າໂຮງງານພຶດສະພາ ຢູ່ຫ້ອງຄັງສິນຄ້າ', '002'),
('SD069.2', '(162) URAI PHANICH (LAO) CO., LTD', '0', 'ບ້ານສົມສະໜຸກ ທາງເຂົ້າໂຮງງານພຶດສະພາ ຊັ້ນ2', 'ບ້ານສົມສະໜຸກ ທາງເຂົ້າໂຮງງານພຶດສະພາ ຊັ້ນ2', '002'),
('SD070', '(163) Mr. Somsy ປກສ ເມືອງສີນາກ', '0', 'ປກສ ເມືອງສີນາກ', 'ປກສ ເມືອງສີນາກ', '002'),
('SD070.1', '(165) Mr. Somsy Sacom Bank ຕະຫຼາດເຊົ້າ', '0', 'Sacom Bank ຕະຫຼາດເຊົ້າ', 'Sacom Bank ຕະຫຼາດເຊົ້າ', '002'),
('SD070.10', '(174) Mr. Somsy ສນຍ ຊັນ3 306 ( ROOM 318 )', '0', 'ສນຍ ຊັນ3 306 ( ROOM 318 )', 'ສນຍ ຊັນ3 306 ( ROOM 318 )', '002'),
('SD070.11', '(175) Mr. Somsy ຫອ້ງການສູນກາງພົວພັນຕ່າງປະເທດ', '0', 'ຫອ້ງການສູນກາງພົວພັນຕ່າງປະເທດ', 'ຫອ້ງການສູນກາງພົວພັນຕ່າງປະເທດ', '002'),
('SD070.12', '(176) Mr. Somsy ໂຮງງານແອນຕາ ບ້ານສ້າງຄູ', '0', 'ໂຮງງານແອນຕາ ບ້ານສ້າງຄູ', 'ໂຮງງານແອນຕາ ບ້ານສ້າງຄູ', '002'),
('SD070.2', '(166) Mr. Somsy SACOM BANKສີຫອມ', '0', 'SACOM BANKສີຫອມ', 'SACOM BANKສີຫອມ', '002'),
('SD070.3', '(167) Mr. Somsy ໂຮງງານອິນເມດ ບ້ານດອນໜູນ', '0', 'ໂຮງງານອິນເມດ ບ້ານດອນໜູນ', 'ໂຮງງານອິນເມດ ບ້ານດອນໜູນ', '002'),
('SD070.4', '(168) Mr. Somsy SACOM BANK', '0', 'SACOM BANK', 'SACOM BANK', '002'),
('SD070.5', '(169) Mr. Somsy Stp shippig show', '0', 'Stp shippig show', 'Stp shippig show', '002'),
('SD070.6', '(315) Mr. Somsy ໂຮງງານຕັດຫຍິບອີນຕິໂກ້', '0', 'ໂຮງງານຕັດຫຍິບອີນຕິໂກ້', 'ໂຮງງານຕັດຫຍິບອີນຕິໂກ້', '002'),
('SD070.7', '(171) Mr. Somsy ສນຍຊັນ  318 ( ROOM 306 )', '0', 'ສນຍຊັນ  318 ( ROOM 306 )', 'ສນຍຊັນ  318 ( ROOM 306 )', '002'),
('SD070.8', '(172) Mr. Somsy', '0', '', '', '002'),
('SD070.9', '(173) Mr. Somsy ສນຍຊັນ 401  ( ROOM 401 )', '0', 'ສນຍຊັນ 401  ( ROOM 401 )', 'ສນຍຊັນ 401  ( ROOM 401 )', '002'),
('SD073', '(283) Insee Trading', '0', 'ໜອງບອນ ຢູ່ຫ້ອງໃຕ້ດິນ', 'ໜອງບອນ ຢູ່ຫ້ອງໃຕ້ດິນ', '002'),
('SD079', '(178) LAO ROOT', '0', 'ໂພນສີນວນ', 'ໂພນສີນວນ', '002'),
('SD081', '(284) First Commercial Bank Ltd., Vientiane Branch', '0', '', '', '002'),
('SD082', '(179) ສະຫະພັນ ເທັນນິສ ແຫ່ງຊາດລາວ', '0', '', '', '002'),
('SD083', '(302) ບໍລິສັດ ສິດທິໂລຈິດສຕິກ ລາວ ຈໍາກັດ', '0', 'ຕຶກປີໂຕເທດ ຊັ້ນ3', 'ຕຶກປີໂຕເທດ ຊັ້ນ3', '002'),
('SD084.1', '(285) First Commercial Bank Ltd., Vientiane Branch', '0', '', '', '002'),
('SD085', '(181) ບໍລິສັດ ຂວັນໃຈ ການຄ້າ', '0', 'ຕຶກຂັວນໃຂ ໂພນປາກເປົ້າ ຊັ້ນ 3', 'ຕຶກຂັວນໃຂ ໂພນປາກເປົ້າ ຊັ້ນ 3', '002'),
('SD089', '(182) SDC ສີດຳດວນ ຊັ້ນ2', '0', 'ສີດຳດວນ ຊັ້ນ2', 'ສີດຳດວນ ຊັ້ນ2', '002'),
('SD089.1', '(183) SDC ສີດຳດວນ ຊັ້ນ1', '0', 'ສີດຳດວນ ຊັ້ນ1', 'ສີດຳດວນ ຊັ້ນ1', '002'),
('SD089.2', '(184) SDC ສີດຳດວນ ຊັ້ນ3', '0', 'ສີດຳດວນ ຊັ້ນ3', 'ສີດຳດວນ ຊັ້ນ3', '002'),
('SD092', '(185) ໃສທິລາດ ກຣູບ   ດອນກອຍ ຂ້າງໂຮງໜໍເສດຖາ', '0', 'ດອນກອຍ ຂ້າງໂຮງໜໍເສດຖາ', 'ດອນກອຍ ຂ້າງໂຮງໜໍເສດຖາ', '002'),
('SD093', '(316) ໂຮງງານຜະລິດຢາເລກ2', '0', '', '', '002'),
('SD094', '(187) Advanced-Connectek Lao Co., Ltd', '0', 'ແຂວງ ສະຫວັນນະເຂດ', 'ແຂວງ ສະຫວັນນະເຂດ', '002'),
('SD096', '(188) HIS ຂ້າງຫໍວັດທະນາທຳ', '0', 'ຂ້າງຫໍວັດທະນາທຳ', 'ຂ້າງຫໍວັດທະນາທຳ', '002'),
('SD102', '(329) Namtheun 1 Hydropower Project  ປາກທາງ', '0', 'ປາກທາງ', 'ປາກທາງ', '002'),
('SD102.1', '(191) Namtheun 1 Hydropower Project  ເຄືອງຕາງແຂວງ ', '0', 'ເຄືອງຕາງແຂວງ ບໍລິຄໍາໄຊ', 'ເຄືອງຕາງແຂວງ ບໍລິຄໍາໄຊ', '002'),
('SD102.2', 'Namtheun 1 Hydropower Project  ປາກກະດິງ', '0', 'ປາກກະດິງ', 'ປາກກະດິງ', '002'),
('SD103', '(192) Lao Coca-Cola Bottling Co., Ltd ແຖວຊ້າງສາມຫົ', '0', 'ແຖວຊ້າງສາມຫົວ', 'ແຖວຊ້າງສາມຫົວ', '002'),
('SD103.1', '(193) Lao Coca-Cola ສຳນັກງານໃຫຍ່ ຊັ້ນ 1', '0', 'ສຳນັກງານໃຫຍ່ ຊັ້ນ 1', 'ສຳນັກງານໃຫຍ່ ຊັ້ນ 1', '002'),
('SD103.2', '(194) Lao Coca-Cola ສຳນັກງານໃຫຍ່ ຊັ້ນ 3', '0', 'ສຳນັກງານໃຫຍ່ ຊັ້ນ 3', 'ສຳນັກງານໃຫຍ່ ຊັ້ນ 3', '002'),
('SD104', '(317) Isuzu Truck Service Factory Lao Co., Ltd', '0', '', '', '002'),
('SD105', '(106) ກະຊວງການເງິນ ພະແນກ ງົບປະມານສູນກາ ຊັ້ນ2', '0', 'ພະແນກ ງົບປະມານສູນກາ ຊັ້ນ2', 'ພະແນກ ງົບປະມານສູນກາ ຊັ້ນ2', '002'),
('SD105.1', '(197)ກະຊວງການເງິນ ພະແນກກວດກາແລະນິຕິກຳ ຊັ້ນ3', '0', 'ພະແນກກວດກາແລະນິຕິກຳ ຊັ້ນ3', 'ພະແນກກວດກາແລະນິຕິກຳ ຊັ້ນ3', '002'),
('SD105.2', '(198) ກະຊວງການເງິນ  ຊັ້ນ4', '0', 'ຊັ້ນ4', 'ຊັ້ນ4', '002'),
('SD106', 'ບໍລິສັດ ຮຸ່ງໄຊຍະສິງ ຈະເລີນ ຜະລິດຕະພັນ ການກະເສດ ຈໍາ', '0', '', '', '002'),
('SD108', 'MR VILAIPHET', '0', 'ສະຫວັນນະເຂດ', 'ສະຫວັນນະເຂດ', '002'),
('SD110', '(210) Savang Photo', '0', 'ສະຫວ່າງ', 'ສະຫວ່າງ', '002'),
('SD111', '(202) SGS (Lao) Sole Co., Ltd ຫຼັກ5', '0', 'ຫຼັກ5', 'ຫຼັກ5', '002'),
('SD112', '(203) DKSH', '0', 'ຫຼັງວຽງຈັນເຊັນເຕີ', 'ຫຼັງວຽງຈັນເຊັນເຕີ', '002'),
('SD113', '(204) HHL ສາງເດີ່ນບິນ', '0', 'ສາງເດີ່ນບິນ', 'ສາງເດີ່ນບິນ', '002'),
('SD115', '(205) JICA PROJECT TEAM', '0', 'ກະຊວງສຶກສາ ຊັ້ນ3', 'ກະຊວງສຶກສາ ຊັ້ນ3', '002'),
('SD115.1', '(335) JICA PROJECT TEAM ກະຊວງສຶກສາ ຊັ້ນ3', '0', 'ກະຊວງສຶກສາ ຊັ້ນ3', 'ກະຊວງສຶກສາ ຊັ້ນ3', '002'),
('SD117', '(206) NAMCHE1 HYDRO POWER CO., LTD', '0', 'ບໍລິຄໍາໄຊ', 'ບໍລິຄໍາໄຊ', '002'),
('SD120', 'ST-MUANG THAI  ຫນ່ວຍທີ່2  ຊັ້ນ3', '0', 'ຫນ່ວຍທີ່2  ຊັ້ນ3', 'ຫນ່ວຍທີ່2  ຊັ້ນ3', '002'),
('SD120.1', '(210) ST-MUANG THAI INSURANCE CO., LTD  ຊັ້ນ4', '0', 'ຊັ້ນ4', 'ຊັ້ນ4', '002'),
('SD120.2', '(219) ST-MUANG THAI INSURANCE CO., LTD', '0', 'ໜ່ວຍລຸ່ມ', 'ໜ່ວຍລຸ່ມ', '002'),
('SD121', '(212) BIC BANK LAO CO., LTD ໂພນທັນ ຊັ້ນ2', '0', 'ໂພນທັນ ຊັ້ນ2', 'ໂພນທັນ ຊັ້ນ2', '002'),
('SD121.1', '(213) BIC BANK LAO CO., LTD ຫັດາສະດີ ຊັ້ນ1', '0', 'ຫັດາສະດີ ຊັ້ນ1', 'ຫັດາສະດີ ຊັ້ນ1', '002'),
('SD121.2', '(214) BIC BANK LAO CO., LTD ຫັດາສະດີ ຊັ້ນ3', '0', 'ຫັດາສະດີ ຊັ້ນ3', 'ຫັດາສະດີ ຊັ້ນ3', '002'),
('SD121.3', '(215) BIC BANK LAO CO., LTD ຫຼວງພະບາງ', '0', 'ຫຼວງພະບາງ', 'ຫຼວງພະບາງ', '002'),
('SD121.4', '(287) BIC BANK LAO CO., LTD ໂພນທັນ ຊັ້ນ2', '0', 'ໂພນທັນ ຊັ້ນ2', 'ໂພນທັນ ຊັ້ນ2', '002'),
('SD121.5', '(059) BIC BANK LAO CO., LTD ໂພນທັນ ຊັ້ນ1', '0', 'ໂພນທັນ ຊັ້ນ1', 'ໂພນທັນ ຊັ້ນ1', '002'),
('SD123', 'DG Group', '0', '', '', '002'),
('SD124', '(218) KP3G & NOMURA Trading CO., LTD ສະຫ່ວາງ', '0', 'ສະຫ່ວາງ', 'ສະຫ່ວາງ', '002'),
('SD125', '(219) ບໍລິສັດ ພີທີ ຈໍາກັດ ( ຜູ້ດຽວ )', '0', 'ແຖວວັດ ໂພນໄຊ', 'ແຖວວັດ ໂພນໄຊ', '002'),
('SD126', '(220) Tiong Nam Logistics Solution ( Lao ) Co., Lt', '0', 'ແຂວງ ສະຫວັນນະເຂດ', 'ແຂວງ ສະຫວັນນະເຂດ', '002'),
('SD127', '(286) Sale Holding Co., Ltd', '0', '', '', '002'),
('SD130', '(221) KP (Logistic) ສີໄຄ', '0', 'ສີໄຄ', 'ສີໄຄ', '002'),
('SD132', '(222) ໂຮງພິມ ປານຄຳ', '0', 'ດົງປາລານ', 'ດົງປາລານ', '002'),
('SD133', '(223) KPMG LAO., LTD ໜອງດ້ວງເໜືອ ຊັ້ນ 10 ຕຶກຄາວພາຊ', '0', 'ໜອງດ້ວງເໜືອ ຊັ້ນ 10 ຕຶກຄາວພາຊ້າ', 'ໜອງດ້ວງເໜືອ ຊັ້ນ 10 ຕຶກຄາວພາຊ້າ', '002'),
('SD133.1', '(224) KPMG LAO., LTD ໜອງດ້ວງເໜືອ ຊັ້ນ 10 ຕຶກຄາວພາຊ', '0', 'ໜອງດ້ວງເໜືອ ຊັ້ນ 10 ຕຶກຄາວພາຊ້າ', 'ໜອງດ້ວງເໜືອ ຊັ້ນ 10 ຕຶກຄາວພາຊ້າ', '002'),
('SD134', '(225) Panyathip Plan B Media lao Co., Ltd', '0', 'ນາໄຊ', 'ນາໄຊ', '002'),
('SD135', '(226) Lao Quality Sole Co., Ltd ໂພນປາກເປົ້າ ພະແນກ ', '0', 'ໂພນປາກເປົ້າ ພະແນກ ບຸກຄະລາກອນ', 'ໂພນປາກເປົ້າ ພະແນກ ບຸກຄະລາກອນ', '002'),
('SD135.1', '(227) Lao Quality Sole Co., Ltd ໂພນປາກເປົ້າ', '0', 'ໂພນປາກເປົ້າ', 'ໂພນປາກເປົ້າ', '002'),
('SD135.2', '(228) Lao Quality Sole Co., Ltd ໂພນປາກເປົ້າ ຫ້ອງບັ', '0', 'ໂພນປາກເປົ້າ ຫ້ອງບັນຊີ', 'ໂພນປາກເປົ້າ ຫ້ອງບັນຊີ', '002'),
('SD135.3', '(056) Lao Quality Sole Co., Ltd ສະຫວັນນະເຂດ', '0', 'ສະຫວັນນະເຂດ', 'ສະຫວັນນະເຂດ', '002'),
('SD136', '(230) ປີໂຕເທດພູມ່າ ເອເນີຈິ ນໍາເຂົ້າ - ສົ່ງອອກ ຈໍາກ', '0', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ 4', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ 4', '002'),
('SD136.1', '(232) ປີໂຕເທດພູມ່າ ເອເນີຈິ ນໍາເຂົ້າ - ສົ່ງອອກ ຈໍາກ', '0', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ4', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ4', '002'),
('SD136.2', '(265) ປີໂຕເທດພູມ່າ ເອເນີຈິ ນໍາເຂົ້າ - ສົ່ງອອກ ຈໍາກ', '0', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ4', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ4', '002'),
('SD137', '(321) ບໍລິສັດ ຊີເອັດສ໌ ພັດທະນາພະລັງງານ ຈຳກັດຜູ້ດຽວ', '0', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ2', 'ໂພນທັນ ປ້ຳນຳມັນ ຊັ້ນ2', '002'),
('SD138', '(105) ບໍລິສັດ ( Me Idea ) ມີໄອເດຍ', '0', 'ຕຶກ kc ຂ້າງໂຮງຮຽນ ມ.ສວຽງຈັນ', 'ຕຶກ kc ຂ້າງໂຮງຮຽນ ມ.ສວຽງຈັນ', '002'),
('SD140', '(138) ບໍລິສັດ ລາວເທັບຈະເລີນ ປະກັນໄພ', '0', '', '', '002'),
('SD141', '(236) LAO TOYOTA SERVICE CO., LTD', '0', 'ສີໄຄ ພະແນກໂຕຖັງ ແລະ ສີ', 'ສີໄຄ ພະແນກໂຕຖັງ ແລະ ສີ', '002'),
('SD141.1', '(237) LAO TOYOTA SERVICE CO., LTD', '0', 'ສີໄຄ ພະແນກຂາຍ', 'ສີໄຄ ພະແນກຂາຍ', '002'),
('SD141.2', '(238) LAO TOYOTA SERVICE CO., LTD', '0', 'ສີໄຄ ພະແນກ ບັນຊີການເງິນ', 'ສີໄຄ ພະແນກ ບັນຊີການເງິນ', '002'),
('SD141.3', '(239) LAO TOYOTA SERVICE CO., LTD ທົ່ງຂັນຄຳ ຊັ້ນ2', '0', 'ທົ່ງຂັນຄຳ ຊັ້ນ2', 'ທົ່ງຂັນຄຳ ຊັ້ນ2', '002'),
('SD141.4', '(240) LAO TOYOTA SERVICE CO., LTD', '0', 'ທົ່ງຂັນຄຳ ຝ່າຍບ໋ລິການ', 'ທົ່ງຂັນຄຳ ຝ່າຍບ໋ລິການ', '002'),
('SD141.5', '(241) LAO TOYOTA SERVICE CO., LTD', '0', 'ທົ່ງຂັນຄຳ ຝ່າຍບ໋ລິການ', 'ທົ່ງຂັນຄຳ ຝ່າຍບ໋ລິການ', '002'),
('SD142', '(242) HOYA LAOS., LTD', '0', 'ເຂດເສດຖະກິດ', 'ເຂດເສດຖະກິດ', '002'),
('SD142.1', '(245) HOYA LAOS., LTD', '0', 'ເຂດເສດຖະກິດ', 'ເຂດເສດຖະກິດ', '002'),
('SD142.2', '(246) HOYA LAOS., LTD ເຂດເສດຖະກິດ', '0', 'ເຂດເສດຖະກິດ', 'ເຂດເສດຖະກິດ', '002'),
('SD142.3', '(247)HOYA LAOS., LTD', '0', 'ເຂດເສດຖະກິດ', 'ເຂດເສດຖະກິດ', '002'),
('SD142.4', '(334) HOYA LAOS., LTD', '0', 'ເຂດເສດຖະກິດພິເສດ', 'ເຂດເສດຖະກິດພິເສດ', '002'),
('SD142.5', 'HOYA LAOS., LTD', '0', 'ເຂດເສດຖະກິດພິເສດ', 'ເຂດເສດຖະກິດພິເສດ', '002'),
('SD143', '(248) ເອັມພີ ກໍ່ສ້າງ ( MP Construction ) ຊັ້ນ2', '0', 'ຊັ້ນ2', 'ຊັ້ນ2', '002'),
('SD144', '(057) ບໍລິສັດ ມະຫາໂຊກການຄ້າ ສີໃຄ', '0', 'ສີໃຄ', 'ສີໃຄ', '002'),
('SD145', '(251) Burasari Heritage Luang Prabang', '0', 'Account', 'Account', '002'),
('SD146', '(252) TOYOTA Tsusho Leasing ( Lao ) Co., Ltd', '0', 'ຕຶກຄາວພາຊາຊັ້ນ9', 'ຕຶກຄາວພາຊາຊັ້ນ9', '002'),
('SD147', '(253) ສະຖາບັນການເງິນຈຸລະພາກທີ່ບໍ່ຮັບເງິນຝາກ ລາວ-ຍີ', '0', 'ໂພນພະເນົາ', 'ໂພນພະເນົາ', '002'),
('SD148', '(254) ບໍລິສັດ ລາວໂຕໂຢຕ້າ ພາກໃຕ້ ບໍລິການ ຈໍາກັດ', '0', 'ປາກເຊ', 'ປາກເຊ', '002'),
('SD149', '(255) World Health Organisation', '0', 'ຕຶກທາງຫຼັງ ໜ່ວຍທີ່2', 'ຕຶກທາງຫຼັງ ໜ່ວຍທີ່2', '002'),
('SD149.1', '(256) World Health Organisation ຊັ້ນ 1', '0', 'ຊັ້ນ 1', 'ຊັ້ນ 1', '002'),
('SD149.2', '(257) World Health Organisation ຊັ້ນ 2', '0', 'ຊັ້ນ 2', 'ຊັ້ນ 2', '002'),
('SD149.3', '(258) World Health Organisation', '0', 'ຕຶກທາງຫຼັງ ໜ່ວຍທີ່1', 'ຕຶກທາງຫຼັງ ໜ່ວຍທີ່1', '002'),
('SD150', 'JTI International ( Lao ) Sole Co., Ltd', '0', '', '', '002'),
('SD151', 'ບໍລິສັດ ລາວນິຊິມັດຊຶ ກໍ່ສ້າງຈໍາກັດ', '0', '', '', '002'),
('SD154', '(252) ບໍລິສັດ ພາຫະນະ', '0', 'ຮ້ານຂາຍລົດ ໂພນທັນ', 'ຮ້ານຂາຍລົດ ໂພນທັນ', '002'),
('SD156', '(264) KASIKORNTHAI BANK LTD', '0', 'ໂພນສີນວນ', 'ໂພນສີນວນ', '002'),
('SD158', 'M Lao Import - Export co., Ltd', '0', '', '', '002'),
('SD160', '(267) ບໍລິສັດ P26 ອອກແບບ ແລະ ກໍ່ສ້າງເຄຫາສະຖານ', '0', 'ໂພນທັນ', 'ໂພນທັນ', '002'),
('SD161', '(268) ບໍລິສັດ ຕັງຈະເລີນ', '0', 'ແຖວວົງວຽນດອນໜູນ', 'ແຖວວົງວຽນດອນໜູນ', '002'),
('SD162', '(269) ບໍລິສັດ ກົດໝາຍ ວໍຊັ້ນລໍ ລາວຈໍາກັດ', '0', '', '', '002'),
('SD163', '(270) ບໍລິສັດ ບອດຕ໌ລອງເຢັຍ ຈຳກັດ', '0', 'ໄຊສົມບູນ', 'ໄຊສົມບູນ', '002'),
('SD165', '(271) Lao Vita Development Co., Ltd', '0', '', '', '002'),
('SD165.1', '(337) Lao Vitar Development Co., Ltd', '0', 'KM26', 'KM26', '002'),
('SD165.2', '(272) Sure Stay Hotel by Best Western', '0', 'ແຖວແຄມຂອງ ຊັ້ນ2', 'ແຖວແຄມຂອງ ຊັ້ນ2', '002'),
('SD167', 'Sure Stay Hotel by Best Western', '0', '', '', '002'),
('SD167.3', '(273) Sure Stay Hotel by Best Western', '0', 'ແຖວແຄມຂອງ ຊັ້ນ1', 'ແຖວແຄມຂອງ ຊັ້ນ1', '002'),
('SD170', '(276) ທະນາຄານ ການຄ້າຕ່າງປະເທດລາວ ມະຫາຊົນ ( BCEL )', '0', 'ແຖວແຄມຂອງ ໜ່ວຍໃນ', 'ແຖວແຄມຂອງ ໜ່ວຍໃນ', '002'),
('SD170.1', '(277) ທະນາຄານ ການຄ້າຕ່າງປະເທດລາວ ມະຫາຊົນ ( BCEL )', '0', 'ແຖວແຄມຂອງ ໜ່ວຍນອກ', 'ແຖວແຄມຂອງ ໜ່ວຍນອກ', '002'),
('SD170.2', '(338) ທະນາຄານ ການຄ້າຕ່າງປະເທດລາວ ມະຫາຊົນ ( BCEL )', '0', 'ພະແນກ ນິຕິກຳ ຕຶກ C ຊັ້ນ5', 'ພະແນກ ນິຕິກຳ ຕຶກ C ຊັ້ນ5', '002'),
('SD171', '(189) MARUHAN Japan Bank Lao Co., Ltd', '0', 'ຊັນ 3 ຕຶກ B', 'ຊັນ 3 ຕຶກ B', '002'),
('SD171.1', '(278) MARUHAN Japan Bank Lao Co., Ltd', '0', 'ໜອງບອນ', 'ໜອງບອນ', '002'),
('SD171.2', 'MARUHAN Japan Bank Lao Co.,Ltd', '0', 'ຊັນ 2 ຕຶກ B', 'ຊັນ 2 ຕຶກ B', '002'),
('SD172', '(303) ບໍລິສັດ ເຄພີ ບໍລິການ ແລະ ພັດທະນາ ສີມືແຮງງານ ', '020 5647 0999', 'PHONPHANAO', 'PHONPHANAO', '002'),
('SD173', '(280) ບໍລິສັດ ພົງສະຫວັນ ປະກັນໄພ (ເອພີເອ) ຈຳກັດ', '020 76140903', 'ພົງສະຫວັນ ປະກັນໄພ', 'ພົງສະຫວັນ ປະກັນໄພ', '002'),
('SD174', 'Nongchan Complex Development  Co., Ltd  ( Vientian', '020 5647 0999', '', '', '002'),
('SD175', '(281) RMA', '0', 'KM4', 'KM4', '002'),
('SD175.1', 'RMA LUK 3', '0', 'LUK 3', 'LUK 3', '002'),
('SD175.2', 'RMA', '0', '', '', '002'),
('SD176', '(289) ຮ້ານຄ້າ Friend Ship Supermart Vientiane', '0', 'ຕັງຈະເລີນ ດອນໜູນ', 'ຕັງຈະເລີນ ດອນໜູນ', '002'),
('SD177', '(177) ບໍລິສັດ ອອນຊອນ ຈໍາກັດຜູ້ດຽວ', '0', 'ນາໄຊ', 'ນາໄຊ', '002'),
('SD177.1', '(340) ບໍລິສັດ ອອນຊອນ ຈໍາກັດຜູ້ດຽວ', '0', 'ນາໄຊ', 'ນາໄຊ', '002'),
('SD178', '(293) ທະນາຄານຄາເທ', '0', 'ໃກ້ຕຶກ BIC ຕະຫຼາດເຊົ້າ', 'ໃກ້ຕຶກ BIC ຕະຫຼາດເຊົ້າ', '002'),
('SD179', 'ບໍລິສັດ ສຸຂະລາສີ ຂາອອກ - ຂາເຂົ້າ ຈໍາກັດ', '020 5601 7788', '', '', '002'),
('SD180', 'ສະຖາບັນການເງິນຈຸລະພາກທີ່ຮັບເງິນຝາກ ນິວຄອນເຊັບ ຈໍາກ', '020 2307 9789', '', '', '002'),
('SD181', '(297) Namtheun 2', '0', 'Nhong bon', 'Nhong bon', '002'),
('SD182', 'ຮ້ານ ອາຫານລາວເດີມ', '0', '', '', '002'),
('SD183', '(259) Nippon Koei Co.,Ltd', '020 5555 2883', 'Phonetong', 'Phonetong', '002'),
('SD184', '(298) ບໍລິສັດ ຄູໂບຕ້າລາວ ຈຳກັດຜູ້ດຽວ', '0', 'PHONTHAN', 'PHONTHAN', '002'),
('SD185', '(320) ບໍລິສັດ Bivac Lao.,', '0', 'ນາໄຊ', 'ນາໄຊ', '002'),
('SD186', '(305) ບໍລິສັດ ລີນຟອກ ໂລຈິດຕີກ (ລາວ) ຈຳກັດ', '0', 'ນາໄຊ', 'ນາໄຊ', '002'),
('SD187', '(332) KSP', '0', 'ຫນອງໄຮ', 'ຫນອງໄຮ', '002'),
('SD188', 'ສໍານັກງານ ປົກປ້ອງເງິນຝາກ ທະນາຄານແຫ່ງ ສປປລາວ', '0', '', '', '002'),
('SD189', '(046) ບໍລິສັດ ໂມເດີນໂຮມ', '030 5041959', 'ດອນກອຍ', 'ດອນກອຍ', '002'),
('SD190', '(209) ບໍລິສັດ ນິວລີ້ງ ຈໍາກັດຜູ້ດຽວ', '0', '', '', '002'),
('SD195', '(250) LAO PREMIER INTERNATIONAL LAW OFFICE', '0', '', '', '002'),
('SD196', '(296) ອົງການຊ່ວຍເຫຼືອເດັກ ຍົມມະລາດ', '0', 'ແຂວງຄຳມ່ວນ', 'ແຂວງຄຳມ່ວນ', '002');

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
('001', 'Seven', 'test', 'ຍິງ', '0203213', 'test', 'souksavath@verisette.com', '202cb962ac59075b964b07152d234b70', '001', 1, ''),
('003', 'Anousone', 'Phachanthavong', 'ຊາຍ', '02058585151', '', 'anousone.p@sevendigital.l', '81dc9bdb52d04dc20036dbd8313ed055', '001', 1, ''),
('005', 'Chanthaphone', 'PHANTHAVONG', 'ຊາຍ', '02058666115', '', 'Chanthaphone@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '005', 2, ''),
('006', 'Phendavanh', 'BOUDTAKHOD', 'ຍິງ', '02059812060', '', 'phendavanh@gmail.com', '9996535e07258a7bbfd8b132435c5962', '005', 2, ''),
('007', 'Saengphachan', 'VIENGSAVANH', 'ຊາຍ', '0', '', 'Saengphachan', '202cb962ac59075b964b07152d234b70', '003', 2, ''),
('012', 'Bounyord', 'SOMMANIVONG', 'ຍິງ', '02029933260', '', 'bounyordsommanivong@gmail.com', '276714a8442b0ac5c1421513d089a795', '008', 3, ''),
('013', 'PHANSALATH', 'YILATHCHAY', 'ຊາຍ', '0', '', 'PHANSALAT', '202cb962ac59075b964b07152d234b70', '001', 2, ''),
('014', 'HATSADY', 'PHOMMACHANH', 'ຊາຍ', '0', '', 'HATSADY', '202cb962ac59075b964b07152d234b70', '005', 2, ''),
('015', 'VANHNYPHONE', 'VONGKHAMPHIM', 'ຊາຍ', '0', '', 'VONGKHAMPHIM', '202cb962ac59075b964b07152d234b70', '005', 2, ''),
('016', 'Khamsaeng', 'Khamsaeng', 'ຊາຍ', '0', '', 'Khamsaeng', '202cb962ac59075b964b07152d234b70', '001', 2, ''),
('018', 'kuaymaly', 'vongsengphachan', 'ຍິງ', '020 55-66362', '', 'namnuengvongsengphachan@gmail.com', 'd02dc9e05b0bd86d8fdaecac280110d0', '008', 1, ''),
('019', 'toukta', 'siliphone', 'ຍິງ', '98269998', '', 'touktasiliphone7@gmail.com', '26a8219414bb513b4592ad9f86b9478f', '002', 2, 'seven_601b7d0028a76.ppt'),
('020', 'Vilayphone', 'sengdala', 'ຍິງ', '76550657', '', 'ling92612696@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '008', 2, ''),
('021', 'Ko', 'DUANGPHACHANH', 'ຊາຍ', '02077897743', '', 'Pingkoduangphachan@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '001', 2, ''),
('022', 'Hatsavanh', 'Khammoungkhoun', 'ຊາຍ', '02059309121', '', 'hatsavanhdd@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '005', 2, ''),
('025', 'SEVEN', 'SEVEN', 'ຍິງ', '0', '', 'seven@seven.com', '81dc9bdb52d04dc20036dbd8313ed055', '007', 2, ''),
('030', 'lasaid', 'vongkhienkham', 'ຊາຍ', '0', '', 'lasaidvongkhienkham@gmai.com', '827ccb0eea8a706c4c34a16891f84e7b', '004', 2, ''),
('111', 'test', 'test', 'ຊາຍ', 'test', 'test', 'seven@user.com', '202cb962ac59075b964b07152d234b70', '001', 2, NULL),
('testcheckstock', 'test', 'test', 'ຊາຍ', 'test', 'test', 'seven@stock.com', '202cb962ac59075b964b07152d234b70', '001', 3, NULL);

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
  `usr_acc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seen1` int(11) DEFAULT NULL,
  `seen2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `emp_id`, `cus_id`, `amount`, `packing_no`, `form_date`, `form_time`, `stt_accept`, `status`, `usr_acc`, `seen1`, `seen2`) VALUES
(1, '003', 'SD002', '2.00', 1111, '2021-01-12', '10:10:52', 'ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', '', NULL, 1),
(3, '021', 'SD094', '1.00', 1, '2021-02-04', '15:00:57', 'ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', 'Seven', 1, 1),
(5, '111', 'SD094', '1.00', 1, '2021-02-05', '11:56:57', 'ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', 'Seven', 1, 0),
(6, '005', 'SD053.15', '1.00', 10524, '2021-02-22', '13:23:21', 'ຍັງບໍ່ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', '', 0, 0),
(7, '025', 'SD005', '1.00', 10527, '2021-02-22', '14:24:01', 'ຍັງບໍ່ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', '', 0, 0),
(8, '025', 'SD008.1', '1.00', 1504, '2021-02-23', '09:28:57', 'ຍັງບໍ່ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', '', 0, 0),
(9, '111', 'SD002', '1.00', 1, '2021-03-09', '14:55:18', 'ຍັງບໍ່ອະນຸມັດ', 'ຍັງບໍ່ທັນເບີກ', '', 0, 0);

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
(13, '(CT351075)', 1, 1),
(15, '(CT351075)', 1, 3),
(17, '727865', 1, 5),
(18, 'CT201911(F)', 1, 6),
(19, 'T6933', 1, 7),
(20, 'CT201370', 1, 8),
(21, '727865', 1, 9);

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
('(CT351075)', 'DRUM', '2320/2520', 7, 5, 7, 1, ''),
('(JC91-01144A)', 'Fuser Samsung SCX-8240NA', '8240', 7, 5, 8, 3, ''),
('(JC91-01152B)', 'Fuser Samsung K2200ND', 'K2200', 7, 5, 8, 1, ''),
('005k 83930', 'COUPLING ASSY-DRUM', 'S2520/2010', 7, 9, 7, 5, ''),
('007k18480', 'Drum Drive Assembly (Pl 3.2', '2263/2265', 7, 5, 7, 1, ''),
('007K98390', 'Main Drive Housing', '2520', 7, 5, 7, 1, ''),
('011E26670', 'LEVER-LATCH FRONT', '2520/2320/2010', 7, 9, 7, 5, ''),
('032K08084', 'Guide Assy-Disp', 'S-2520/2320/2010', 7, 5, 7, 5, ''),
('059K31270', 'FEED ROLL DF', '2320/2520/2010', 7, 9, 7, 10, ''),
('059K32773', 'Feed  Tay  2520/2320/2010/2020', '2520/2320/2010/2020', 7, 9, 7, 10, ''),
('059K75065', 'Feeder Assy-DADF L2', '2263/2265', 7, 9, 7, 1, ''),
('059K75770', 'FEEDER ASSY-VL / DF', '2520/2320/2010', 7, 9, 7, 2, ''),
('059K78690', 'ROLLER ASSY-BTR', '2520', 7, 5, 7, 1, ''),
('064K93512', 'IBT BELT Assembly (REP 6.2.1)4156', '2263', 7, 5, 7, 2, ''),
('064K93592', 'BELT ASSY-IBT FX', '2263/2265', 7, 5, 7, 3, ''),
('094k92716/094k92715', 'Disp penser Assy-C 2263 (C)', '2263/2265', 7, 5, 7, 3, ''),
('094k93290', 'Disp penser Assy-K 2263 (B)', '2263/2265', 7, 5, 7, 3, ''),
('094k93300', 'Disp penser Assy-Y 2263 (Y)', '2263/2265', 7, 5, 7, 3, ''),
('094k93310', 'Disp penser Assy-M 2263 (M)', '2263/2265', 7, 5, 7, 3, ''),
('105E22191', 'LVPS (REP 18.1.3)', '2010', 7, 5, 7, 1, ''),
('110E97990', 'L/H Coverinter lock switch', '2520/2320/2010', 7, 9, 7, 5, ''),
('120148', '5070', '5070', 8, 6, 7, 1, ''),
('120194', '5070', '5070', 8, 6, 7, 1, ''),
('120878', '4070', '4070', 8, 6, 7, 1, ''),
('120E34245', 'ACTUATOR-SET', '2520', 7, 5, 7, 5, ''),
('123010', '5070', '5070', 8, 6, 7, 1, ''),
('123023', '5070', '5070', 8, 6, 7, 1, ''),
('123101', '5070', '5070', 8, 6, 7, 1, ''),
('123678', '5070', '5070', 8, 6, 7, 1, ''),
('123680', '5070', '5070', 8, 6, 7, 1, ''),
('123700', '5070', '5070', 8, 6, 7, 1, ''),
('123778', '5070', '5070', 8, 6, 7, 1, ''),
('125191', '5070', '5070', 8, 6, 7, 1, ''),
('125244', '5070', '5070', 8, 6, 7, 1, ''),
('125599', '5070', '5070', 8, 6, 7, 1, ''),
('125627', '5070', '5070', 8, 6, 7, 1, ''),
('125632', '5070', '5070', 8, 6, 7, 1, ''),
('126011', '5070', '5070', 8, 6, 7, 1, ''),
('126082', '5070', 'IV5070', 8, 6, 7, 1, ''),
('126153', '5070', '5070', 8, 6, 7, 1, ''),
('126157', '5070', '5070', 8, 6, 7, 1, ''),
('126159', '5070', '5070', 8, 6, 7, 1, ''),
('126217', '5070', '5070', 8, 6, 7, 1, ''),
('126353', '5070', '5070', 8, 6, 7, 1, ''),
('126364', '5070', '5070', 8, 6, 7, 1, ''),
('126498', '5070', '5070', 8, 6, 7, 1, ''),
('126556', '5070', '5070', 8, 6, 7, 1, ''),
('126563', '5070', '5070', 8, 6, 7, 1, ''),
('126845', '5070', '5070', 8, 6, 7, 1, ''),
('126K34679', 'FUSER UNIT S2020', '2020', 7, 5, 7, 5, ''),
('126K36340', 'FUSER', '5070/4070/3070', 7, 5, 7, 5, ''),
('126K37880', 'FUSER UNIT S2010', '2010', 7, 5, 7, 5, ''),
('126K38262', 'FUSER UNIT S2320/2520', '2320/2520', 7, 5, 7, 5, ''),
('127032', '5070', '5070', 8, 6, 7, 1, ''),
('127055', '5070', '5070', 8, 6, 7, 1, ''),
('127209', '5070', '5070', 8, 6, 7, 1, ''),
('127262', '5070', '5070', 8, 6, 7, 1, ''),
('127562', '5070', '5070', 8, 6, 7, 1, ''),
('127603', '5070', '5070', 8, 6, 7, 1, ''),
('127670', '4070', '4070', 8, 6, 7, 1, ''),
('128082', '5070', '5070', 8, 6, 7, 1, ''),
('128535', '5070', '5070', 8, 6, 7, 1, ''),
('128771', '4070', '4070', 8, 6, 7, 1, ''),
('128786', '4070', '4070', 8, 6, 7, 1, ''),
('128934', '4070', '4070', 8, 6, 7, 1, ''),
('129069', '5070', '5070', 8, 6, 7, 1, ''),
('129095', '5070', '5070', 8, 6, 7, 1, ''),
('129096', '5070', '5070', 8, 6, 7, 1, ''),
('129146', '5070', '5070', 8, 6, 7, 1, ''),
('129632', '5070', '5070', 8, 6, 7, 1, ''),
('140284', '5070', 'AP5B', 8, 6, 7, 1, ''),
('141293', '5070', 'AP5B', 8, 6, 7, 1, ''),
('141761', '5070', 'AP5B', 8, 6, 7, 1, ''),
('145300', '5070', 'AP5B', 8, 6, 7, 1, ''),
('147414', '2020', '2020', 8, 6, 7, 1, ''),
('149848', '5070', 'AP5B', 8, 6, 7, 1, ''),
('157611', 'ຈັກກ່ອບປີ່', '5570', 8, 6, 7, 1, ''),
('170105', '5070', '5070', 8, 6, 7, 1, ''),
('170347', '5070', '5070', 8, 6, 7, 1, ''),
('170382', '5070', '5070', 8, 6, 7, 1, ''),
('170441', '5070', '5070', 8, 6, 7, 1, ''),
('170490', '5070', '5070', 8, 6, 7, 1, ''),
('170694', '5070', '5070', 8, 6, 7, 1, ''),
('170728', '5070', '5070', 8, 6, 7, 1, ''),
('170743', '5070', '5070', 8, 6, 7, 1, ''),
('170759', '5070', '5070', 8, 6, 7, 1, ''),
('170788', '5070', '5070', 8, 6, 7, 1, ''),
('170837', '5070', '5070', 8, 6, 7, 1, ''),
('170849', '5070', '5070', 8, 6, 7, 1, ''),
('171011', '5070', '5070', 8, 6, 7, 1, ''),
('171021', '4070', '4070', 8, 6, 7, 1, ''),
('171308', '4070', '4070', 8, 6, 7, 1, ''),
('181180', '2020', '2020', 8, 6, 7, 1, ''),
('181909', '2020', '2020', 8, 6, 7, 1, ''),
('182060', '2020', '2020', 8, 6, 7, 1, ''),
('182065', '2020', '2020', 8, 6, 7, 1, ''),
('182099', '2020', '2020', 8, 6, 7, 1, ''),
('182121', '2020', '2020', 8, 6, 7, 1, ''),
('182122', '2020', '2020', 8, 6, 7, 1, ''),
('182136', '2020', '2020', 8, 6, 7, 1, ''),
('182139', '2020', '2020', 8, 6, 7, 1, ''),
('182155', '2020', '2020', 8, 6, 7, 1, ''),
('182156', '2020', '2020', 8, 6, 7, 1, ''),
('182166', '2020', '2020', 8, 6, 7, 1, ''),
('182167', '2020', '2020', 8, 6, 7, 1, ''),
('182172', '2020', '2020', 8, 6, 7, 1, ''),
('182174', '2020', '2020', 8, 6, 7, 1, ''),
('182179', '2020', '2020', 8, 6, 7, 1, ''),
('187414', '2020', '2020', 8, 6, 7, 1, ''),
('188420', '2020', '2020', 8, 6, 7, 1, ''),
('188865', '2020', '2020', 8, 6, 7, 1, ''),
('190144', '2020', '2020', 8, 6, 7, 1, ''),
('190476', '2020', '2020', 8, 6, 7, 1, ''),
('193010', '2020', '2020', 8, 6, 7, 1, ''),
('193231', '2020', '2020', 8, 6, 7, 1, ''),
('193433', '2020', '2020', 8, 6, 7, 1, ''),
('2010/2520', 'UPER FUSER  Roller S2010/2520', '2010/2520', 7, 5, 7, 1, ''),
('302579', '2022', '2022', 8, 6, 7, 1, ''),
('302584', '2022', '2022', 8, 6, 7, 1, ''),
('312363', '3375', '3375', 8, 6, 7, 1, ''),
('312426', '3373', '3373', 8, 6, 7, 1, ''),
('312636', '3373', '3373', 8, 6, 7, 1, ''),
('315712', '3373', '3373', 8, 6, 7, 1, ''),
('401056', '2011', '2011', 8, 6, 7, 1, ''),
('423740', '2520', '2520', 8, 6, 7, 1, ''),
('423774', '2520', '2520', 8, 6, 7, 1, ''),
('427410', '2520', '2520', 8, 6, 7, 1, ''),
('427460', '2520', '2520', 8, 6, 7, 1, ''),
('427495', '2520', '2520', 8, 6, 7, 1, ''),
('427830', '2520', '2520', 8, 6, 7, 1, ''),
('428050', '2520', '2520', 8, 6, 7, 1, ''),
('429284', '2520', '2520', 8, 6, 7, 1, ''),
('429286', '2520', '2520', 8, 6, 7, 1, ''),
('429300', '2520', '2520', 8, 6, 7, 1, ''),
('429302', '2520', '2520', 8, 6, 7, 1, ''),
('429389', '2520', '2520', 8, 6, 7, 1, ''),
('429680', '2520', '2520', 8, 6, 7, 1, ''),
('429682', '2520', '2520', 8, 6, 7, 1, ''),
('511760', '3376', '3376', 8, 6, 7, 1, ''),
('518941', '3371', '3371', 8, 6, 7, 1, ''),
('520205', '4476', '4476', 8, 6, 7, 1, ''),
('520563', '3371', '3371', 8, 6, 7, 1, ''),
('520684', '4476', '4476', 8, 6, 7, 1, ''),
('520862', '4476', '4476', 8, 6, 7, 1, ''),
('565094', '4471', '4471', 8, 6, 7, 1, ''),
('565095', '4471', '4471', 8, 6, 7, 1, ''),
('604K98152', 'KIT IBT ASSY S2020', '2020', 7, 5, 7, 5, ''),
('675K85030', 'KIT DV (DEVELOPER) 3373( K ) ຖົງຝຸ່ນ', '3373/5575/5570', 13, 5, 7, 10, ''),
('675K85040', 'KIT DV (DEVELOPER) 3373( C ) ຖົງຝຸ່ນ', '3373/5575/5570', 13, 5, 7, 10, ''),
('675K85050', 'KIT DV (DEVELOPER) 3373( M ) ຖົງຝຸ່ນ', '3373/5575/5570', 13, 5, 7, 10, ''),
('675K85060', 'KIT DV (DEVELOPER) 3373( Y ) ຖົງຝຸ່ນ', '3373/5575/5570', 13, 5, 7, 10, ''),
('701555', '3373', '3373', 8, 6, 7, 1, ''),
('710829', '3375', '3375', 8, 6, 7, 1, ''),
('710892', '3373', '3373', 8, 6, 7, 1, ''),
('710894', '3373', '3373', 8, 6, 7, 1, ''),
('712695', '3375', '3375', 8, 6, 7, 1, ''),
('721806', '4475', '4475', 8, 6, 7, 1, ''),
('722990', '4475', '4475', 8, 6, 7, 1, ''),
('726633', '4475', '4475', 8, 6, 7, 1, ''),
('726828', '4475', '4475', 8, 6, 7, 1, ''),
('727865', '5575', '5575', 8, 6, 7, 1, ''),
('728142', '5575', '5575', 8, 6, 7, 1, ''),
('728343', '5575', '5575', 8, 6, 7, 1, ''),
('728352', '5575', '5575', 8, 6, 7, 1, ''),
('730611', '5575', '5575', 8, 6, 7, 1, ''),
('731635', '5575', '5575', 8, 6, 7, 1, ''),
('731851', '5575', '5575', 8, 6, 7, 1, ''),
('848K68731', 'COVER ASSY-RETARD.CRU', '2520/2020/2010/2023', 7, 9, 7, 10, ''),
('848K85390', 'Taryl No Paper Sensor', '2520/2320/2010', 7, 9, 7, 5, ''),
('860659', '3373', '3373', 8, 6, 7, 1, ''),
('868E47601', 'Hinge Support', '2263', 7, 9, 7, 5, ''),
('880574', 'ຈັກກ່ອບປີ່', '5575', 8, 6, 7, 1, ''),
('880599', '5575', '5575', 8, 6, 7, 1, ''),
('885738', '5575', '5575', 8, 6, 7, 1, ''),
('888347', '4475', '4475', 8, 6, 7, 1, ''),
('925999', '2265', '2265', 8, 6, 7, 1, ''),
('935695', '3373', '3373', 8, 6, 7, 1, ''),
('940268', '3375', '3375', 8, 6, 7, 1, ''),
('942659', '3375', '3375', 8, 6, 7, 1, ''),
('943145', '3375', '3375', 8, 6, 7, 1, ''),
('944376', '3375', '3375', 8, 6, 7, 1, ''),
('952801', '2265', '2265', 8, 6, 7, 1, ''),
('952999', '2265', '2265', 8, 6, 7, 1, ''),
('960K75270', '(SCC)MCU PWB', '2263/2265', 7, 5, 7, 1, ''),
('960K85345', 'PWBAAC BLC H', '2520', 7, 5, 7, 3, ''),
('CLT-C809S', 'TONER ( CYAN )', '9301', 3, 5, 8, 10, ''),
('CLT-K809S', 'TONER ( BLACK )', '9301', 3, 5, 8, 10, ''),
('CLT-M809S', 'TONER( MAGENTA )', '9301', 3, 5, 8, 10, ''),
('CLT-R709S', 'DRUM UNIT SCX-8123/8128', '8123/8128', 18, 5, 8, 5, ''),
('CLT-R809S', 'DRUM SAMSUNG', '9301', 18, 5, 8, 10, ''),
('CLT-Y809S', 'TONER  ( YELLOW )', '9301', 3, 5, 8, 10, ''),
('CM-305DF', 'ເຝື່ອງຊຸດຄວາມຮ້ອນ', '305', 7, 9, 7, 5, ''),
('CNBIKDG26X', '4070', '4070', 8, 6, 8, 1, ''),
('CT201370', 'Toner  ( BLACK )', '3373/5570/5575/3375/4475/4476', 3, 5, 7, 20, ''),
('CT201371', 'Toner ( Cyan )', '3373/5570/5575/3375 /4475/4476', 3, 5, 7, 20, ''),
('CT201372', 'Toner ( Magenta )', '3373/5570/5575 /3375/4476/4475', 3, 5, 7, 20, ''),
('CT201373', 'Toner (Yellow )', '3373/5570/55753375/4475/7746', 3, 5, 7, 20, ''),
('CT201434', 'Toner BLACK DocuCentre C2263/2265/2260', '2263/2260/2265', 3, 5, 7, 1, ''),
('CT201435', 'Toner Cyan', '2263/2260/2265', 3, 5, 7, 10, ''),
('CT201436', 'Toner Magenta', '2263/2260/2265', 3, 5, 7, 5, ''),
('CT201437', 'Toner Yellow', '2263/2260/2265', 3, 5, 7, 5, ''),
('CT201820', 'Toner  ( BLACK )', '5070/4070/3070', 3, 5, 7, 30, ''),
('CT201911', 'Toner Cartridge', '2022', 3, 5, 6, 1, 'seven_5ff6a3d5eaf2f.jfif'),
('CT201911(F)', 'TONER', '2010/2320/2011/2520', 3, 5, 7, 1, ''),
('CT202246', 'TONER 2020 (BK)', '2020', 3, 5, 7, 20, ''),
('CT202247', 'TONER 2020 (C)', '2020', 3, 5, 7, 20, ''),
('CT202248', 'TONER 2020 (M)', '2020', 3, 5, 7, 20, ''),
('CT202249', 'TONER 2020 (Y)', '2020', 3, 5, 7, 20, ''),
('CT203020', 'TONER 2022 K', '2022', 3, 5, 7, 10, ''),
('CT203021', 'TONER 2022 C', '2022', 3, 5, 7, 5, ''),
('CT203022', 'TONER 2022 M', '2022', 3, 5, 7, 5, ''),
('CT203023', 'TONER 2022 Y', '2022', 3, 5, 7, 5, ''),
('CT350851', 'Drum Longlig Cartridge  (C,M,Y,K)', '3373/55754475/4476', 18, 5, 7, 20, ''),
('CT350876', 'DRUM 305 (C,M,Y,K)', '305', 18, 5, 7, 5, ''),
('CT350942', 'FUSER', '5070', 7, 5, 7, 5, ''),
('CT350947', 'Drum BLACK', '2263/2260/2265', 18, 5, 7, 5, ''),
('CT350948', 'Drum Cyan', '2263/2260/2265', 18, 5, 7, 5, ''),
('CT350949', 'Drum Magenta', '2263/2260/2265', 18, 5, 7, 5, ''),
('CT350950', 'Drum Yellow', '2263/2260/2265', 18, 5, 7, 5, ''),
('CT351007', 'DRUM Cartridge Unit S222O,S2010', '2010', 18, 5, 7, 10, ''),
('CT351053', 'DRUM DC SC2020 DRUM (CMYK)', '2020', 18, 5, 7, 20, ''),
('CWAA0751', 'Waste toner Bottle', '3373/5570/5575/4475/4476', 19, 5, 7, 10, ''),
('CWAA0777', 'Waste toner', '2263/2260/2265', 7, 5, 7, 5, ''),
('CWAA0791', 'Fuser Unit Assy AP', '2263/2265', 7, 5, 7, 3, ''),
('CWAA0793', 'IBT Belt nAP', '2263/2265', 7, 5, 7, 5, ''),
('CWAA0794', 'Transfer Roller AP', '2263/2265', 7, 5, 7, 2, ''),
('CWAA0869', 'Waste Toner 2020', '2020', 19, 5, 7, 5, ''),
('DC2010CPS', 'DocuCentre', '2010', 4, 6, 7, 5, 'seven_5ff6a394d18c0.jpg'),
('DEVELOPER', 'DEVELOPER S2010/2520/2320', '2010/2320/2520', 7, 5, 7, 1, ''),
('EL300822', 'FUSER UNIT 305', '305', 7, 5, 7, 5, ''),
('HP P57750DW', 'TONER  BK', 'HP P57750DW', 3, 5, 9, 5, ''),
('JC39-01917A', 'FLAT CABLE-WLED SCX-8240NA', '8240', 17, 9, 8, 5, ''),
('JC91-01050A', 'FUSER UNIT  SCX-8123/8128', '8123/8128', 7, 5, 8, 5, ''),
('ML-R707', 'DRUM K2200ND', 'K2200', 18, 5, 8, 1, ''),
('MLT-D607S ( F )', 'TONER SAMSUNG SCX-8240NA F', '8240', 3, 5, 8, 10, ''),
('MLT-D707L', 'TONER K2200ND', 'K2200', 3, 5, 8, 1, ''),
('MLT-D709S', 'TONER SAMSUNG SCX-8123/8128', '8123/8128', 3, 5, 8, 10, ''),
('MLT-R607K', 'DRUM Samsung SCX-8240NA', '8240', 18, 5, 8, 5, ''),
('S2010', 'Blade  S2010/2520', '2010/2520', 7, 5, 7, 1, ''),
('T6931', 'EPSON T5270/5070 K Photo', 'EPSON T5270/5070', 3, 5, 3, 5, ''),
('T6932', 'EPSON T5270/5070 C', 'EPSON T5270/5070', 3, 5, 3, 5, ''),
('T6933', 'EPSON T5270/5070 M', 'EPSON T5270/5070', 3, 5, 3, 5, ''),
('T6934', 'EPSON T5270/5070 Y', 'EPSON T5270/5070', 3, 5, 3, 5, ''),
('T6935', 'EPSON T5270/5070 K matte', 'EPSON T5270/5070', 3, 5, 3, 5, ''),
('TONER  C', 'TONER  C', 'HP P57750DW', 3, 5, 9, 5, ''),
('TONER  M', 'TONER  M', 'HP P57750DW', 3, 5, 9, 5, ''),
('TONER  Y', 'TONER  Y', 'HP P57750DW', 3, 5, 9, 5, ''),
('TONER CM-305 (Black) F', 'TONER CM-305 (Black) F', '305', 3, 5, 7, 20, ''),
('TONER CM-305 (Cyan) F', 'TONER CM-305 (Cyan) F', '305', 3, 5, 7, 20, ''),
('TONER CM-305 (Magenta) F', 'TONER CM-305 (Magenta) F', '305', 3, 5, 7, 20, ''),
('TONER CM-305 (Yellow) F', 'TONER CM-305 (Yellow) F', '305', 3, 5, 7, 20, ''),
('ZDFJBJE400045J', '4070', '4070', 8, 6, 7, 1, ''),
('ZDFJBJEJ40001HX', '4070', '4070', 8, 6, 8, 1, ''),
('ZEMJBJMHB0000DZ', 'K2200', 'K2200', 8, 6, 8, 1, ''),
('ZEMJBJMHB0005XV', 'K2200', 'K2200', 8, 6, 8, 1, '');

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
('LAK', '1.00', '1.00'),
('THB', '340.00', '345.00'),
('USD', '10200.00', '10300.00');

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
(4, 'DC2010CPS', 'AADD', 1, '6000000.00', '001', '001', '2021-01-07', '13:04:54', '1', 'LAK', '1.00', '001', '003', ''),
(5, 'DC2010CPS', 'AAWW', 1, '6000000.00', '001', '001', '2021-01-07', '13:04:54', '2', 'LAK', '1.00', '001', '003', ''),
(6, 'CT201911', 'RTEW', 1, '90000000.00', '001', '001', '2021-01-07', '13:04:54', '3', 'LAK', '1.00', '001', '003', ''),
(7, 'CT201911', 'SANGW', 1, '9000000.00', '001', '001', '2021-01-07', '13:04:54', '4', 'LAK', '1.00', '001', '003', ''),
(8, 'CT201911(F)', 'Toner Cartridge S222O,S2320,S2', 106, '450.00', '', '', '2021-01-08', '15:32:28', '32212', 'THB', '1.00', '001', '002', ''),
(9, 'CT201911(F)', 'Toner Cartridge S222O,S2320,S2', 20, '450.00', '', '', '2021-01-11', '10:11:00', '32212', 'THB', '1.00', '001', '001', ''),
(10, '(CT351075)', '2320/2520', 222, '5600.00', '222', '222', '2021-01-11', '10:11:00', '222', 'THB', '1.00', '001', '001', ''),
(11, '880574', '5575', 1, '125000.00', '', '', '2021-01-14', '13:17:15', '88057', 'THB', '1.00', '012', '002', 'KP Company Ltd  ສີໄຄ ພະແນກບັນຊີ  ຊັ້ນ1'),
(12, '157611', '5570', 1, '95000.00', '', '', '2021-01-15', '10:47:27', '15761', 'THB', '1.00', '012', '002', 'MSIG Insurance Co., Ltd ໂພນທັນ'),
(13, '880574', '880574', 1, '125000.00', '', '', '2021-01-15', '10:47:27', '88057', 'THB', '1.00', '012', '002', 'KP Company Ltd  ສີໄຄ ພະແນກບັນຊີ  ຊັ້ນ1'),
(14, '728142', '728142', 1, '125000.00', '', '', '2021-01-15', '10:47:27', '72814', 'THB', '1.00', '012', '002', 'ບໍ່ຮູ້ຢູ່ໃສ'),
(15, '727865', '727865', 1, '125000.00', '', '', '2021-01-15', '10:47:27', '72786', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(16, 'CT201371', '1', 20, '3800.00', '', '', '2021-02-06', '11:02:19', '3373/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(17, 'CT201370', '157611', 20, '1765.00', '', '', '2021-02-06', '11:02:19', '3373/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(18, 'CT201372', '2', 20, '3800.00', '', '', '2021-02-06', '11:02:19', '3373/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(19, 'CT201373', '3', 20, '3800.00', '', '', '2021-02-06', '11:02:19', '3373/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(20, 'CT350851', '4', 20, '4600.00', '', '', '2021-02-06', '11:02:19', '3373', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(21, 'CT201434', '6', 20, '1500.00', '', '', '2021-02-06', '11:15:58', '2263/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(22, 'CT201435', '7', 20, '3800.00', '', '', '2021-02-06', '11:15:58', '2263/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(23, 'CT201436', '8', 20, '3800.00', '', '', '2021-02-06', '11:15:58', '2263', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(24, 'CT202246', '2020', 20, '1059.00', '', '', '2021-02-08', '15:24:43', '2020k', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(25, 'CT202247', '2020C', 20, '757.00', '', '', '2021-02-08', '15:24:43', '2020C', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(26, 'CT202248', '2020M', 20, '757.00', '', '', '2021-02-08', '15:24:43', '2020M', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(27, 'CT202249', '2020Y', 20, '757.00', '', '', '2021-02-08', '15:24:43', '2020Y', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(28, 'CT351053', '2020DRUM', 20, '2900.00', '', '', '2021-02-08', '15:24:43', '2020D', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(29, 'CWAA0869', '2020 Waste Toner', 5, '690.00', '', '', '2021-02-08', '15:24:43', '2020 ', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(30, '604K98152', '2020 KIT IBT ASSY', 5, '4100.00', '', '', '2021-02-08', '15:31:49', '2020K', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(31, 'CT203020', '2022', 5, '842.00', '', '', '2021-02-08', '15:31:49', '2022', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(32, 'CT203021', '2022 C', 5, '757.00', '', '', '2021-02-08', '15:31:49', '2022 ', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(33, 'CT203022', '2022 M', 5, '757.00', '', '', '2021-02-08', '15:31:49', '2022 ', 'THB', '1.00', '012', '002', '5'),
(34, 'CT203023', '2022Y', 5, '757.00', '', '', '2021-02-08', '15:31:49', '2022Y', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(35, 'TONER CM-305 (Black) F', '305', 15, '600.00', '', '', '2021-02-08', '15:31:49', '305', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(36, 'TONER CM-305 (Magenta) F', '305M', 10, '600.00', '', '', '2021-02-08', '15:37:07', '305M', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(37, 'TONER CM-305 (Yellow) F', '305Y', 10, '600.00', '', '', '2021-02-08', '15:37:07', '305Y', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(38, 'CT350876', '305DRUM', 2, '5300.00', '', '', '2021-02-08', '15:37:07', '305DR', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(39, 'EL300822', '305FUSER', 11, '3500.00', '', '', '2021-02-08', '15:37:07', '305FU', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(40, 'CM-305DF', '305ເຝື່ອງຊຸດຄວາມຮ້ອນ', 2, '400.00', '', '', '2021-02-08', '15:37:07', '305ເຝ', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(41, 'CLT-K809S', '9301', 14, '1700.00', '', '', '2021-02-08', '15:49:05', '9301', 'THB', '1.00', '025', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(42, 'CLT-C809S', '9301 C', 15, '4900.00', '', '', '2021-02-08', '15:49:05', '9301C', 'THB', '1.00', '025', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(43, 'CLT-M809S', '9301 M', 21, '4900.00', '', '', '2021-02-08', '15:49:05', '9301 ', 'THB', '1.00', '025', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(44, 'CLT-Y809S', '9301 Y', 18, '4900.00', '', '', '2021-02-08', '15:49:05', '9301 ', 'THB', '1.00', '025', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(45, 'CLT-R809S', '9301 DRUM', 11, '2800.00', '', '', '2021-02-08', '15:49:05', '9301 ', 'THB', '1.00', '025', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(46, 'MLT-D707L', 'K2200ND', 16, '1418.00', '', '', '2021-02-08', '16:06:23', 'K2200', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(47, 'ML-R707', 'K2200 DRUM', 10, '3700.00', '', '', '2021-02-08', '16:06:23', 'K2200', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(48, '(JC91-01152B)', 'K2200 FUSER', 10, '5300.00', '', '', '2021-02-08', '16:06:23', 'K2200', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(49, 'MLT-D607S ( F )', '8240', 10, '1800.00', '', '', '2021-02-08', '16:06:23', '8240', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(50, 'MLT-R607K', '8240DRUM', 6, '4900.00', '', '', '2021-02-08', '16:06:23', '8240D', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(51, '(JC91-01144A)', '8240FUSER', 2, '8600.00', '', '', '2021-02-08', '16:13:21', '8240F', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(52, 'JC39-01917A', '8240 CABLE-WLED', 6, '250.00', '', '', '2021-02-08', '16:13:21', '8240 ', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(53, 'MLT-D709S', '8123/8128', 17, '2528.00', '', '', '2021-02-08', '16:13:21', '8123/', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(54, 'JC91-01050A', '8123/8128 DRUM', 8, '7500.00', '', '', '2021-02-08', '16:13:21', '8123/', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(55, 'JC91-01050A', '8123/8128 FUSER', 3, '8500.00', '', '', '2021-02-08', '16:13:21', '8123/', 'THB', '1.00', '012', '005', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(56, 'CT351007', '2010 Drum', 11, '2500.00', '', '', '2021-02-09', '14:57:31', '2010 ', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(57, '126K37880', '2010 FUSER', 9, '3800.00', '', '', '2021-02-09', '14:57:31', '2010 ', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(58, '126K38262', '2520/2320', 4, '2900.00', '', '', '2021-02-09', '14:57:31', '2520/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(59, '(CT351075)', '2320/2520 DRUM', 12, '4000.00', '', '', '2021-02-09', '14:57:31', '2320/', 'THB', '1.00', '012', '002', 'ຢູ່ຫ້ອງການເຊເວັ້ນ'),
(60, '675K85030', '5575/5570/3373', 3, '300.00', '', '', '2021-02-18', '15:52:40', '675K8', 'THB', '1.00', '012', '002', ''),
(61, '675K85040', '5575/5570/3373 .1', 1, '300.00', '', '', '2021-02-18', '15:52:40', '5575/', 'THB', '1.00', '012', '002', ''),
(62, '675K85050', '5575/5570/3373 .2', 2, '300.00', '', '', '2021-02-18', '15:52:40', '5575/', 'THB', '1.00', '012', '002', ''),
(63, '675K85060', '5575/5570/3373 .3', 1, '300.00', '', '', '2021-02-18', '15:52:40', '5575/', 'THB', '1.00', '012', '002', ''),
(64, 'T6935', 'EPSON T5270', 2, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(65, 'T6931', 'EPSON T5270 K Photo', 3, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(66, 'T6932', 'EPSON T5270 C', 2, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(67, 'T6933', 'EPSON T5270 M', 2, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(68, 'T6935', 'EPSON T5270', 2, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(69, 'T6931', 'EPSON T5270 K Photo', 3, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(70, 'T6932', 'EPSON T5270 C', 2, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(71, 'T6933', 'EPSON T5270 M', 2, '5150.00', '', '', '2021-02-22', '12:10:51', 'EPSON', 'THB', '1.00', '012', '001', 'ຢູ່ຕູ້ຂ້າງໂຕະ'),
(72, 'HP P57750DW', 'HP P57750DW', 1, '4100.00', '', '', '2021-02-24', '11:49:55', 'HP P5', 'THB', '1.00', '012', '005', ''),
(73, 'TONER  C', 'HP P57750DW.C', 1, '4300.00', '', '', '2021-02-24', '11:49:55', 'HP P5', 'THB', '1.00', '012', '005', ''),
(74, 'TONER  M', 'HP P57750DW.M', 1, '4300.00', '', '', '2021-02-24', '11:49:55', 'HP P5', 'THB', '1.00', '012', '005', ''),
(75, 'TONER  Y', 'HP P57750DW.Y', 1, '4300.00', '', '', '2021-02-24', '11:49:55', 'HP P5', 'THB', '1.00', '012', '005', '');

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
('002', 'FUJI XEROX', 'FUJI XEROX', 'FUJI XEROX', 'Fuji', 'Fuji', 'seven_60333978316ac.'),
('003', 'AKARIN', 'AKARIN', 'AKARIN', 'AKARIN', 'ປະເທດໃທ', 'seven_5ffffb4d20a55.'),
('004', 'KI DIGITAL', 'KI DIGITAL', '0', '', 'ປະເທດໃທ', ''),
('005', 'SK-OA', '0', '', 'ປະເທດໃທ', '', ''),
('006', 'THAM IT', '0', '', 'ປະເທດໃທ', '', ''),
('007', 'V MOUNT', '0', '', 'ປະເທດໃທ', '', ''),
('008', 'SATAMP RAMA OA', '0', '', 'ປະເທດໃທ', '', '');

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
(7, 'ຊອງ'),
(8, 'ແກັດ'),
(9, 'ອັນ');

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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `check_stock`
--
ALTER TABLE `check_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribute`
--
ALTER TABLE `distribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formdetail`
--
ALTER TABLE `formdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_addr`
--
ALTER TABLE `product_addr`
  MODIFY `pro_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_putback_stock`
--
ALTER TABLE `product_putback_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spare_part`
--
ALTER TABLE `spare_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
