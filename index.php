<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>vue</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="container" id="searchUser">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s1 center">
              <div class="github-logo">
                <img src="images/github-logo.png" alt="" width="48">
              </div>
            </div>
            <div class="input-field col s10" >
              <input type="text" v-model="query" v-on:keyup.13="search()">
              <label>Search User Name</label>
            </div>
            <div class="input-field col s1">
              <button v-on:click="search()" class="btn-floating btn-large waves-effect waves-light purple lighten-1 pulse"><i class="material-icons">search</i></button>
            </div>
          </div>
          <div class="row">
              <div v-if="results">
                <b>Total User : {{results.total_count}}</b>  / <b>Listed User : {{results.items.length}}</b>
                <hr>
                <div v-for="item in results.items">
                  <div class="col s3 developer-card">
                    <div class="chip">
                     <img :src="item.avatar_url">
                     <a :href="item.html_url" class="tag-a left" target="_blank" rel="noreferrer noopener">
                       <span v-if="item.login.length > userNameLength">{{item.login.substring(0,nameLength)}}<small> ...</small></span>
                       <span v-else>{{item.login}}</span>
                     </a>
                     <small class="right">: {{item.score}}</span>
                   </div>
                  </div>
                </div>
              </div>
           </div>
         </div>
       </div>
      </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script src="https://unpkg.com/vue"></script>
      <script src="script.js" charset="utf-8"></script>
  </body>
</html>