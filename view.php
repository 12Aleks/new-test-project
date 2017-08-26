<?php
session_start();
echo 'Hello' . ' ' .  $_SESSION['user'] . '!';
