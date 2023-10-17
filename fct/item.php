<?php
    function displayItem($item){
        $html = '<li>
        <!-- drag handle -->
        
        <!-- checkbox -->
        <div class="icheck-primary d-inline ml-2">
          <input type="checkbox" value="" name="todo1" id="todoCheck1">
          <label for="todoCheck1"></label>
        </div>
        <!-- todo text -->
        <span class="text">'.$item['intitule'].'</span>
        <!-- Emphasis label -->
        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
        <!-- General tools such as edit or delete-->
        <div class="tools">
          <i class="fas fa-edit"></i>
          <i class="fas fa-trash"></i>
        </div>
      </li>';
    return $html;
    }

    function getItems(){
        return  unserialize(file_get_contents(FILE_NAME));
    }