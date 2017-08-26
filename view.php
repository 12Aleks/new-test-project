<?php
session_start();
echo '<p class="text">' . 'Hello' . ' ' .  $_SESSION['user'] . '!' . '</p>';
