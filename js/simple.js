$(function() {
    var player = $(".player").jPlayer({
        play: function(event){
            // Quando começar a tocar, escrever o nome da faixa sendo executada
             $(".player-current-track").text(
                "Playing: " + event.jPlayer.status.media.title
            );
        },
        swfPath: "js/plugins/jplayer/",
        supplied: "mp3",
        cssSelectorAncestor: "",
        cssSelector: {
            play: ".player-play",
            pause: ".player-pause",
            stop: ".player-stop",
            seekBar: ".player-timeline",
            playBar: ".player-timeline-control"
        },
        size: {
            width: "1px",
            height: "1px"
        }
    });
    
    $(".play-audio").click(function (event) {
        event.preventDefault();

        var $this = $(this);
        var song = {
            title: $this.text(),
            mp3: $this.attr("href")
        };

        player.jPlayer("setMedia", song).jPlayer("play");
    });
});