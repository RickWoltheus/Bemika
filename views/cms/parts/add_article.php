



<!-- activity logs -->

  <div class="toolbar">
    <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
    <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
    <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
    <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
    <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
    <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
    <button type="button" data-func="insertunorderedlist"><i class="fa fa-list-ul"></i></button>
    <button type="button" data-func="insertorderedlist"><i class="fa fa-list-ol"></i></button>
    <button type="button" data-func="createlink" onclick="linkSel()"><i class="fa fa-link" aria-hidden="true"></i></button>
    <button type="button" data-func="deletelink" onclick="unlinkSel()"><i class="fa fa-chain-broken" aria-hidden="true"></i></button>
   
    <div class="customSelect">
      <select data-func="formatblock">
        <option value="h1">Heading 1</option>
        <option value="h2">Heading 2</option>
        <option value="h4">Subtitle</option>
        <option value="p" selected>Paragraph</option>
      </select>
    </div>
    
    <button class="witdhnul"></button>
    <div class="henk">  
      <span> <i class="fa fa-upload" aria-hidden="true"></i></span>
      <input class="uploadbtn" type='file' name='file' id='file'><br><br>;
    </div> 
  
  </div>
  <div class="editor"  id="editor" contenteditable><?php echo $value; ?></div>
  <div class="buttons">
    <!--<button type="button">save draft</button>-->
    
  </div>






