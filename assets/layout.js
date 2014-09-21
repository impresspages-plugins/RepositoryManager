$(document).ready(function () {
    "use strict";
    RepositoryManager.init();
});

var RepositoryManager = new function () {
    "use strict";


    this.init = function () {
        $(window).bind('ipAdminPanelInit.repositoryManager', onResize);
        $(window).bind('resize.repositoryManager', onResize);
        onResize();
    };


    var onResize = function () {
        var requiredHeight = $(window).height() - $('.ipsAdminNavbar').height() - 8;
        $('iframe').height(requiredHeight + 'px');
    };

};


