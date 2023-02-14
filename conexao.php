<?php

    try {
        $conn = new PDO ('mysql:horst=localhorst;dbname=meubanco','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }