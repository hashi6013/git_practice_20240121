<!-- 関数を作成して東京の時間とそれ以外の国時間を表示できるようにします。 -->
<!-- 世界時計アプリは、データによって送信された国と東京が結果としてブラウザに表示されるようにします。 -->
<!-- 表示される判断を search_city_time.phpファイルにて行います。 -->
<!-- ブラウザで表示される判断をこのファイルで行う -->

<?php
require('config/cities.php');

function searchCityTime($city_name)
{
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            $date_time = new DateTime('now', new DateTimeZone($city["time_zone"]));
            $time = $date_time->format('H:i');
            $city['time'] = $time;
            return $city;
        }
    }
}

//5行目 function=関数をつくる, searchCityTime=都市の時間を求める($city_name)=表示したい都市名(引数)
// result.phpで、searchCityTime('東京')としたので、$city_name='東京'になった

// searchCityTimeという名前で、$city_nameを表示させる以下の関数をつくれ。
// config/cities.phpファイルの配列を取り込め。
// $cities内の要素（シドニー、東京、上海、モスクワ、ロンドン、ヨハネスブルグ、ニューヨーク）をひとつずつ変数cityに入れる間、以下の条件を繰り返せ。
// もし、（変数cityのインデックスであるnameが変数city_name（東京）と同じ型）であるならば、以下を実行しろ
// new Datetimeクラスを(それぞれの国ののタイムゾーンを表示させる)変数date_timeに入れろ。
// Datetimeクラスで、それぞれの国の現在時刻を指定し、DateTimeZoneでタイムゾーンを指定している。
// 変数DateTimeの表示形式は何時何分にして、変数timeに入れろ
// 新しい配列の追加。変数time（何時何分）を変数cityのインデックスであるtimeに入れろ
// 変数cityを返す
// 変数cityには、それぞれの国の何時何分という情報が入っている

// 変数に変数を入れるという作業を繰り返しているだけ（繰り返しはforeach)