var request = require('request');

function getWPPosts(callback, error){
    request('http://localhost/newira/wordpress/api/?json=get_posts', function (error, response, body) {
        if (!error && response.statusCode == 200) {
            var wp_posts = JSON.parse(body);
            callback(wp_posts);
        }
    })
}

function getWPPages(callback, error){
  request('http://localhost/newira/wordpress/api/get_page_index/', function (error, response, body){
    if (!error && response.statusCode == 200) {
          var wp_pages = JSON.parse(body);
          callback(wp_pages);
    }
  })
}

module.exports = {
  getWPPages,
  getWPPosts,
}
