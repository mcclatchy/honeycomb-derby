$(document).ready(function() {
    var projectURL = 'http://www.kentucky.com/news/nation-world/national/article148347779.html';

    setShareURL();

    function setShareURL() {
        var projectURL = 'http://www.kentucky.com/news/nation-world/national/article148347779.html';

        // Facebook
        var facebookURL = "http://www.facebook.com/sharer/sharer.php?u=" + projectURL;
        $('#hc-facebook-share').attr("href", facebookURL);

        // Twitter
        var phrase = "Get up close and personal with some of the Kentucky Derby’s best hats";
        // Story headline
            // var metaTitle = $('meta[name=title]').attr('content');
            // var title = metaTitle.split(' | ');
            // var twitterPartial = encodeURI(title[0]);
            // twitterPartial = amperOctoPlus(twitterPartial);
        var twitterURL = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(phrase) + "%20" + projectURL;
        $("#hc-twitter-share").attr("href", twitterURL);

        // Email
        var emailPartial = "mailto:?subject=Spin the Brim: A collection of Derby hats in 3D &body=";
        var emailURL = emailPartial + projectURL;
        $("#hc-email-share").attr("href", emailURL);
    }

    // Clean up ampersands, octothorpes, and pluses
    function amperOctoPlus(url) {
        url = url.replace(/%26/g, '%26');
        url = url.replace(/#/g, '%23');
        url = url.replace(/\+/g, '%2B');
        url = url.replace(/@/g, '%40');
        url = url.replace(/:/g, '%3A');
        return url;
    }
});
