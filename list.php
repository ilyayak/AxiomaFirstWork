<?php

require_once 'vendor/connect.php';
require_once 'vendor/logic.php';

if ($forIndex){
    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `b_fields` ORDER BY `id` DESC');
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li class="list">
          <b style="margin-right: 9px">' . $row->name . '</b>
                            
                                <b style="margin-right: 9px">' . $row->second_name . '</b>
                               
                                  <b style="margin-right: 9px">' . $row->skills . '</b>
                               
                                  <b style="margin-right: 9px">' . $row->male . '</b>
                              
                                  <b style="margin-right: 9px">' . $row->birthdate . '</b>
                                    
                                  <b style="margin-right: 9px">' . $row->perseverance . '</b>
                                
                                <b style="margin-right: 9px">' . $row->neatness . '</b>
                             
                                <b style="margin-right: 9px">' . $row->selflearning . '</b>
                             
                                <b style="margin-right: 9px">' . $row->industriousness . '</b>
                         
                               

            <a href="/delete.php?id=' . $row->id . '">

                    <button class="btn btn-simple">
                        Удалить
                    </button>
            </a>
           </li>';
    }
    echo '</ul>';
}else{
    include "login.php";
}


?>