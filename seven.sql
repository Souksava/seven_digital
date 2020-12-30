-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 06:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
select emp_id,emp_name,emp_surname,gender,tel,address,email,md5(pass) as pass,e.auther_id,auther_name,e.stt_id,stt_name,img_path from employee e left join auther a on e.auther_id=a.auther_id left join emp_status s on e.stt_id=s.stt_id where emp_id like s or emp_name like s or emp_surname like s or gender like s or address like s or email like s or auther_name like s or stt_name like s order by emp_name ASC limit page,15;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `employee_count` (IN `s` VARCHAR(50))  NO SQL
Begin
select emp_id,emp_name,emp_surname,gender,tel,address,email,pass,e.auther_id,auther_name,e.stt_id,stt_name,img_path from employee e left join auther a on e.auther_id=a.auther_id left join emp_status s on e.stt_id=s.stt_id where emp_id like s or emp_name like s or emp_surname like s or gender like s or address like s or email like s or auther_name like s or stt_name like s order by emp_name ASC;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form` (IN `page` INT(5))  begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where stt_accept='ຍັງບໍ່ອະນຸມັດ' order by form_date DESC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form2` (IN `s` VARCHAR(50), IN `page` INT(5))  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where f.form_id like s or f.emp_id like s or f.cus_id like s or form_date like s or stt_accept like s or amount like s or STATUS like s or usr_acc like s or emp_name like s or company like s or packing_no like s or fd.code like s or p.img_path like s or form_time like s order by form_date DESC limit page,15;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `form2_count` (IN `s` VARCHAR(50))  NO SQL
begin
select f.form_id,f.emp_id,f.cus_id,form_date,stt_accept,amount,status,usr_acc,emp_name,company,packing_no,fd.code,p.img_path,form_time from form f left join employee e on f.emp_id=e.emp_id left join customer c on f.cus_id=c.cus_id left join formdetail fd on f.form_id=fd.form_id  left join products p on fd.code=p.code where f.form_id like s or f.emp_id like s or f.cus_id like s or form_date like s or stt_accept like s or amount like s or STATUS like s or usr_acc like s or emp_name like s or company like s or packing_no like s or fd.code like s or p.img_path like s or form_time like s order by form_date DESC;
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
Insert into form values(form_id,emp_id,cus_id,amount,packing,form_date,form_time,stt_accept,status,usr_acc);
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `spare_part` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select sp.id,sp.emp_id,sp.code,serial,spare_part,pro_id,pro_serial,spare_date,spare_time,remark from spare_part sp left join employee e on sp.emp_id=e.emp_id left join product p on sp.code=p.code where id like s or sp.emp_id like s or sp.code like s or serial like s or spart_part like s or pro_id like s or pro_serial like s or spare_date like s or spare_time like s or remark like s ORDER BY sp.id ASC limit 15 OFFSET page;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stocks` (IN `s` VARCHAR(250), IN `page` INT(5))  begin
select serial,dnv,sk.emp_id,sk.sup_id,emp_name,company,rate_buy,rate_sell,qty from stocks sk left join products p on sk.code=p.code left join employee e on sk.emp_id=e.emp_id left join supplier s on sk.sup_id=s.sup_id left join rate r on sk.rate_id=r.rate_id where serial like s or qty like s or dnv like s or pro_no like s or sk.rate_id like s or sk.emp_id like s or sk.sup_id like s or emp_name like s or company like s or rate_buy like s or rate_sell like s order by s.code ASC limit 15 OFFSET page;
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
update employee set emp_name=name,emp_surname=surname,gender=genders,tel=tels,address=addresst,email=emails,pass=md5(passw),auther_id=autherid,stt_id=sttid,img_path=imgpath where emp_id=empid;
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
('002', 'accountings'),
('003', 'Marketing');

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
(1, 'a'),
(2, 'b');

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
(1, 'a'),
(2, 'c');

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

--
-- Dumping data for table `check_stock`
--

INSERT INTO `check_stock` (`id`, `code`, `serial`, `qty`, `emp_id`, `check_date`, `check_time`, `pro_ad`, `remark`) VALUES
(1, '1', 'a', 1, '001', '2020-11-13', '10:16:00', 1, 'a'),
(2, '2', 'aa', 11, '001', '2020-11-13', '10:16:00', 2, 'aa'),
(3, '1', 'a', 1, '001', '2020-12-23', '11:16:34', 1, '1'),
(4, '2', 'aa', 1, '001', '2020-12-23', '11:16:34', 1, 'remark'),
(5, '1', 'a', 1, '001', '2020-12-28', '11:38:50', 1, 'remark'),
(6, '2', 'aa', 1, '001', '2020-12-28', '11:38:50', 1, 'remark'),
(7, '1', 'fff', 1, '001', '2020-12-28', '11:38:50', 1, 'remark');

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
('1', 'test', 'test', 'd@test.com', 'test', '2'),
('10', 'tes', 's', 's', 's', '1'),
('11', 'tes', 's', 's', 's', '1'),
('12', 'tes', 's', 's', 's', '1'),
('13', 'tes', 's', 's', 's', '1'),
('14', 'tes', 's', 's', 's', '1'),
('15', 'tes', 's', 's', 's', '1'),
('16', 'tes', 's', 's', 's', '1'),
('17', 'tes', 's', 's', 's', '1'),
('18', 'tes', 's', 's', 's', '1'),
('19', 'tes', 's', 's', 's', '1'),
('2', 'b', 'bb', 'cc', 'dd', '1'),
('20', 'tes', 's', 's', 's', '1'),
('21', 'tese', 'asdf', 'sgmlbv', 's', '2'),
('3', 'c', 'asdf', 'asfd', 'safa', '1'),
('4', 'd', 'asfasf', 'safd', 'safsa', '1'),
('5', 'e', 'asdf', 'safd', 'safd', '1'),
('6', 'f', 'dgffsdg', 'dsgfdf', 'dsfg', '2'),
('7', 'g', 'dsgdsfg', 'dsgds', 'dsgdsg', '2'),
('8', 'tes', 's', 's', 's', '1'),
('9', 'tes', 's', 's', 's', '1');

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
('1', 'c'),
('2', 'b');

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

--
-- Dumping data for table `distribute`
--

INSERT INTO `distribute` (`id`, `code`, `serial`, `qty`, `emp_id`, `form_id`, `dis_date`, `dis_time`, `remark`) VALUES
(4, '1', 'a', 1, '001', 1, '2020-11-13', '09:12:00', 'a'),
(5, '2', 'aa', 2, '001', 2, '2020-11-13', '09:12:00', 'aa'),
(6, '1', 'a', 1, '001', 1, '2020-12-24', '15:46:18', 'remark'),
(8, '1', 'a', 1, '001', 1, '2020-12-29', '11:43:02', ''),
(9, '1', 'a', 1, '001', 1, '2020-12-29', '11:43:50', ''),
(10, '1', 'fff', 1, '001', 1, '2020-12-29', '11:58:39', '');

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
('001', 'Seven', 'test', 'ຍິງ', '0203213', 'test', 'seven@seven.com', '202cb962ac59075b964b07152d234b70', '001', 2, 'seven_5fe18832b182c.jpeg');

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
(2, 'ຜູ້ນັບສະຕ໋ອກ');

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
(1, '001', '1', '10.00', NULL, '2020-11-13', '09:26:00', 'ອະນຸມັດ', 'ເບີກຈ່າຍແລ້ວ', 'c'),
(2, '001', '2', '10.00', NULL, '2020-12-09', '09:23:00', 'ຍັງບໍ່ອະນຸມັດ', 'b', 'c'),
(5, '001', '2', '10.00', 1, '0000-00-00', '09:23:00', 'ບໍ່ອະນຸມັດ', 'b', 'c'),
(6, '001', '2', '440.00', 1, '2020-11-13', '09:26:00', 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(7, '001', '2', '10.00', 1, '2020-12-08', '09:26:00', 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(8, '001', '3', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(10, '001', '2', NULL, NULL, NULL, NULL, 'ອະນຸມັດ', NULL, NULL),
(11, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(12, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(13, '001', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '001', '1', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(15, '001', '4', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(17, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(18, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(19, '001', '1', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(20, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(21, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL),
(22, '001', '2', NULL, NULL, NULL, NULL, 'ຍັງບໍ່ອະນຸມັດ', NULL, NULL);

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
(7, '1', 1, 1),
(8, '2', 2, 2);

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
('1', 'a', 'b', 1, 3, 1, 5, 'seven_5fe2b5836b612.jpg'),
('2', 'test', 'test', 1, 3, 1, 10, 'seven_5fe2b56fa4a18.jpeg');

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
(1, 'a'),
(2, 'b');

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

--
-- Dumping data for table `product_putback_stock`
--

INSERT INTO `product_putback_stock` (`id`, `code`, `serial`, `qty`, `emp_id`, `form_id`, `date_back`, `time_back`, `remark`) VALUES
(1, '1', 'b', 2, '001', 1, '2020-11-13', '10:15:00', 'c'),
(2, '2', 'aa', 2, '001', 2, '2020-11-13', '10:11:00', 'aa'),
(3, '2', 'aa', 1, '001', 2, '2020-11-13', '10:11:00', 'a'),
(4, '1', 'a', 1, '001', 1, '2020-12-24', '11:08:39', 'remark'),
(5, '2', 'aa', 1, '001', 2, '2020-12-24', '11:08:39', 'remark'),
(6, '1', 'a', 1, '001', 1, '2020-12-29', '14:25:42', '');

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
('1', '1.10', '1.20');

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

--
-- Dumping data for table `spare_part`
--

INSERT INTO `spare_part` (`id`, `emp_id`, `code`, `serial`, `spare_part`, `pro_id`, `pro_serial`, `spare_date`, `spare_time`, `remark`) VALUES
(1, '001', '1', 'a', 'a', 'a', 'a', '2020-11-13', '10:28:00', 'a'),
(2, '001', '2', 'aa', 'aa', 'aa', 'aa', '2020-11-13', '10:28:00', 'aa'),
(3, '001', '1', 'a', 'test1', '2', 'aa', '2020-12-23', '14:56:50', 'test1'),
(4, '001', '1', 'a', 'test2', '2', 'aa', '2020-12-23', '14:56:50', 'test2'),
(5, '001', '1', 'a', 'test1', '2', 'aa', '2020-12-23', '14:57:29', 'test1'),
(6, '001', '1', 'a', 'test2', '2', 'aa', '2020-12-23', '14:57:29', 'test2'),
(7, '001', '1', 'a', 'test', '2', 'aa', '2020-12-28', '15:15:03', 'remark'),
(8, '001', '1', 'a', 'test2', '1', 'fff', '2020-12-28', '15:15:03', 'remark');

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
(1, '1', 'a', 1, '10.00', 'b', '1', '2020-11-13', '09:41:00', '1', '1', '1.20', '001', '1', 'c'),
(2, '2', 'aa', 54, '1.10', 'cc', 'dd', '2020-11-13', '09:41:00', '11', '1', '1.20', '001', '1', 'cc'),
(3, '1', 'FFF', 0, '100000.00', '001', '100', '2020-12-25', '14:45:33', '3', '1', '1.10', '001', '1', '');

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
('1', 'testsa', 'testsa', 'tests', 'test', 'test', 'seven_5fe1893b8f767.jpeg');

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
(3, 'a'),
(4, 'm');

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_addr`
--
ALTER TABLE `product_addr`
  MODIFY `pro_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
