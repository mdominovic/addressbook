<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax Address Book | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">  
        <div class="large-6 columns">
            <h1>Ajax Address Book</h1>
        </div>
        <a class="add-btn button right small" data-reveal-id="myModal">Add Contact</a>
        <div id="myModal" class="reveal-modal" data-reveal>
            <h2>Add Contact</h2>
            <form>
              <div class="row">
                <div class="large-6 columns">
                  <label>First Name
                    <input type="text" placeholder="Enter first name" />
                  </label>
                </div>
                <div class="large-6 columns">
                  <label>Last Name
                    <input type="text" placeholder="Enter last name" />
                  </label>
                </div>
              </div>
              <div class="row">
                    <div class="large-4 columns">
                      <label>E-mail
                        <input type="text" placeholder="Enter e-mail address" />
                      </label>
                    </div>
                    <div class="large-4 columns">
                      <label>Phone Number
                        <input type="text" placeholder="Enter phone number" />
                      </label>
                    </div>
                    <div class="large-4 columns">
                      <label>Group
                        <select>
                          <option value="family">Family</option>
                          <option value="starbuck">Friends</option>
                          <option value="hotdog">Business</option>
                        </select>
                      </label>
                    </div>
              </div>
              <div class="row">
                <div class="large-6 columns">
                    <label>Address 1
                        <input type="text" placeholder="Enter address" />
                    </label>
                </div>
                <div class="large-6 columns">
                    <label>Address 2
                        <input type="text" placeholder="Enter address" />
                    </label>
                </div>
              </div>
              <div class="row">
                <div class="large-12 columns">
                  <label>Notes
                    <textarea placeholder="Enter text"></textarea>
                  </label>
                </div>
              </div>
              <a class="close-reveal-modal">&#215;</a>
            </form>
            
        </div>   
    </div> 
    
    <!-- Loading Image -->
    
    <div id="loaderImage">
        <img src="img/ajax-loader.gif" alt="Loading...">
    </div>
    
    <!--  Main Content  -->
    
    <div id="pageContent"></div>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
