
Share = {
    /**
     * �������� ������������ ����� ������� � ����������� � �������
     * ����� ��� ������������� � inline-js � �������
     * ��� ���������� ������������ ���� ��������� ������ ����� � ��������� �������� ������� �� ����
     *
     * @example <a href="" onclick="return share.go(this)">like+</a>
     *
     * @param Object _element - ������� DOM, ��� ��������
     * @param Object _options - �����, ��� �������������
     */
    go: function(_element, _options) {
        var
            self = Share,
            options = $.extend(
                {
                    type:       'vk',    // ��� �������
                    url:        location.href,  // ����� ������ �����
                    count_url:  location.href,  // ��� ����� ������ ������ �������
                    title:      document.title, // ��������� �������
                    image:        '',             // �������� �������
                    text:       '',             // ����� �������
                },
                $(_element).data(), // ���� ��������� ������ � data, �� ������ ��
                _options            // ��������� �� ������ ������ ����� ��������� ���������
            );

        if (self.popup(link = self[options.type](options)) === null) {
            // ���� �� ������� ������� �����
            if ( $(_element).is('a') ) {
                // ���� ��� <a>, �� ����������� ����� � ������ ������� ���������� ������� �� ������
                $(_element).prop('href', link);
                return true;
            }
            else {
                // ���� ��� �� <a>, �� �������� ������� �� ������
                location.href = link;
                return false;
            }
        }
        else {
            // ����� ������� ������, ������ ������� �� ���������� ���������
            return false;
        }
    },

    // ���������
    vk: function(_options) {
        var options = $.extend({
                url:    location.href,
                title:  document.title,
                image:  '',
                text:   '',
            }, _options);

        return 'http://vkontakte.ru/share.php?'
            + 'url='          + encodeURIComponent(options.url)
            + '&title='       + encodeURIComponent(options.title)
            + '&description=' + encodeURIComponent(options.text)
            + '&image='       + encodeURIComponent(options.image)
            + '&noparse=true';
    },

    // �������������
    ok: function(_options) {
        var options = $.extend({
                url:    location.href,
                text:   '',
            }, _options);

        return 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1'
            + '&st.comments=' + encodeURIComponent(options.text)
            + '&st._surl='    + encodeURIComponent(options.url);
    },

    // Facebook
    fb: function(_options) {
        var options = $.extend({
                url:    location.href,
                title:  document.title,
                image:  '',
                text:   '',
            }, _options);

        return 'http://www.facebook.com/sharer.php?s=100'
            + '&p[title]='     + encodeURIComponent(options.title)
            + '&p[summary]='   + encodeURIComponent(options.text)
            + '&p[url]='       + encodeURIComponent(options.url)
            + '&p[images][0]=' + encodeURIComponent(options.image);
    },

    // ����� ������
    lj: function(_options) {
        var options = $.extend({
                url:    location.href,
                title:  document.title,
                text:   '',
            }, _options);

        return 'http://livejournal.com/update.bml?'
            + 'subject='        + encodeURIComponent(options.title)
            + '&event='         + encodeURIComponent(options.text + '<br/><a href="' + options.url + '">' + options.title + '</a>')
            + '&transform=1';
    },

    // �������
    tw: function(_options) {
        var options = $.extend({
                url:        location.href,
                count_url:  location.href,
                title:      document.title,
            }, _options);

        return 'http://twitter.com/share?'
            + 'text='      + encodeURIComponent(options.title)
            + '&url='      + encodeURIComponent(options.url)
            + '&counturl=' + encodeURIComponent(options.count_url);
    },

    // Mail.Ru
    mr: function(_options) {
        var options = $.extend({
                url:    location.href,
                title:  document.title,
                image:  '',
                text:   '',
            }, _options);

        return 'http://connect.mail.ru/share?'
            + 'url='          + encodeURIComponent(options.url)
            + '&title='       + encodeURIComponent(options.title)
            + '&description=' + encodeURIComponent(options.text)
            + '&imageurl='    + encodeURIComponent(options.image);
    },
// Google+
	gg: function (_options) {
		var options = $.extend({
			url: location.href			
		}, _options);

		return 'https://plus.google.com/share?url='
			+ encodeURIComponent(options.url);
	},

    // ������� ���� �������
    popup: function(url) {
        return window.open(url,'','toolbar=0,status=0,scrollbars=1,width=626,height=436');
    }
}

// ��� �������� ������ .social_share ������� �������� �������
$(document).on('click', '.social_share', function(){
    Share.go(this);
});
