# Api Soap 

Pondo em prática o protocolo SOAP fazendo uma api soap que recebe os números
e faz as operações mátematicas de somar e multiplicar 

## Tecnológias

- PHP 8.1

## Rodando o Projeto

Clone o repositório:
```bash
git clone -b master https://github.com/j0n4t45d3v/Api-Soap.git

```
Entre no diretório do projeto:
```bash
cd Api-Soap
```

Rode a api soap usando o servidor de desenvolvimeto do php:
```bash
php -S localhost:8000 ./operators_soap.php

```

E execulte essa rota post:

```bash 
curl --location 'http://localhost:8000' \
--header 'Content-Type: application/xml' \
--data '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://localhost:8000">
   <soapenv:Header/>
   <soapenv:Body>
      <web:multiply>
         <num1>1</num1>
         <num2>2</num2>
         <num3>2</num3>
      </web:multiply>
   </soapenv:Body>
</soapenv:Envelope>
'
```
Retorno
```xml
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://localhost/server.php" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Body>
        <ns1:multiplyResponse>
            <return xsi:type="xsd:int">4</return>
        </ns1:multiplyResponse>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>

```
