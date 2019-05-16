
<form action="index.php#contact" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input required name="email" type="email" id="email" tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea noresize name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li>
            <button id="confirm" disabled>For display purposes only</button>
            <button id="send" type="submit" class="display" disabled>Send</button>
        </li>     
    </ul> 
</form>