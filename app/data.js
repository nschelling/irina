var request = require('request');

function getWPData(callback, error){
    request('http://localhost/newira/wordpress/api/?json=get_posts', function (error, response, body) {
        if (!error && response.statusCode == 200) {
            var wp_posts = JSON.parse(body);
            callback(wp_posts);   
        }
    })
}

module.exports = getWPData;
