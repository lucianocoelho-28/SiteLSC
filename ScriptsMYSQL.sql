-- Scripts MYSQL
Dev
---endereço: localhost
---banco: sitemls
---usuário: root
---senha: ""

Prod
---endereço: localhost
---banco: id1952072_sitelsc
---usuário: id1952072_luciano
---senha: lsc123



-- Script Criar Tabela 
CREATE TABLE `sitemls`.`comentario` ( `name` VARCHAR(100) NULL DEFAULT NULL , `email` VARCHAR(100) NULL DEFAULT NULL , `phone` VARCHAR(15) NULL DEFAULT NULL , `message` VARCHAR(500) NULL DEFAULT NULL ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_bin COMMENT = 'Tabela de comentario do SiteLSC';

--Script Insert
INSERT INTO `comentario`(`name`, `email`, `phone`, `message`) VALUES ('Luciano de Souza Coelho','m@m.com','11993609254','Mensagem de teste BD');

--Script Select
SELECT `name`, `email`, `phone`, `message` FROM `comentario`;