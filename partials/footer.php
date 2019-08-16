<div id="footer">
  <div class="last_modified">
    <p>
      <?php echo "Last modified: " . date ("F d Y H:i:s.", getlastmod()); ?>
    </p>
  </div>
  <div>
    <p><?php 
if (logged_in()) { echo "Logged in as {$_SESSION['username']}."; } 
       ?></p>
  </div>
  <div>
    <p>
      <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-xhtml10" 
             alt="Valid XHTML 1.0 Strict" 
             height="31" width="88" />
      </a>
    </p>
  </div>
</div>
</body>
</html>
