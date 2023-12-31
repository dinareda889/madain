$(document).ready(function() {
    $.fn.extend({
        treed: function(o) {
            var openedClass = 'fa-folder-open-o';
            var closedClass = 'fa-folder-o';
            if (typeof o !== 'undefined') {
                if (typeof o.openedClass !== 'undefined') {
                    openedClass = o.openedClass
                }
                if (typeof o.closedClass !== 'undefined') {
                    closedClass = o.closedClass
                }
            };
            var tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function() {
                var branch = $(this);
                branch.prepend("<i class='indicator fa " + closedClass + "'></i>");
                branch.addClass('branch');
                branch.on('click', function(e) {
                    if (this === e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle()
                    }
                });
                //branch.children().children().toggle()
            });
            tree.find('.branch .indicator').each(function() {
                $(this).on('click', function() {
                    $(this).closest('li').click()
                })
            });
            /*tree.find('.branch>a').each(function() {
                $(this).on('click', function(e) {
                    $(this).closest('li').click();
                    e.preventDefault()
                })
            });*/
            tree.find('.branch>button').each(function() {
                $(this).on('click', function(e) {
                    $(this).closest('li').click();
                    e.preventDefault()
                })
            })
        }
    });
    $('#tree1').treed();
    $('#tree2').treed({
        openedClass: 'fa-folder-open',
        closedClass: 'fa-folder'
    });
    $('#tree3').treed({
        closedClass: 'fa-minus',
        openedClass: 'fa-plus'
    })
})