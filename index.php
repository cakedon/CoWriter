<?php
    $ver = "1.0";
    $dir = "txt";
    $words_func = ["I", "you", "the", "a", "to", "it", "not", "that", "and", "of", "what", "we", "in", "this", "my", "me", "no", "on", "for", "your", "all", "with", "he", "but", "about", "at", "they", "if", "she", "her", "him", "who", "from", "as", "because", "some", "our", "there", "his"];
    $words_verb = ["be", "do", "have", "get", "go", "can", "know", "think", "want", "come", "say", "see", "like", "look", "make", "take", "let", "tell", "will", "mean", "give", "need", "shall", "talk", "call", "love", "wait", "work", "thank", "try", "feel", "find", "put", "happen", "stop", "leave", "hear", "use", "may", "keep", "help", "believe", "play", "ask", "start", "meet", "show", "guess", "listen", "eat"];
    $words_adverb = ["just", "so", "yeah", "well", "here", "out", "up", "now", "how", "really", "okay", "why", "there", "like", "when", "yes", "back", "then", "where", "never", "too", "down", "very", "maybe", "even", "please", "right", "ever", "again", "still"];
    $words_noun = ["guy", "time", "thing", "man", "way", "day", "people", "dad", "friend", "kid", "boy", "night", "year", "Mr", "mom", "life", "kind", "baby", "girl", "woman", "lot", "home", "hell", "minute", "place", "money", "person", "house", "school", "car", "idea", "week", "job", "fun", "problem", "world", "party", "room", "family", "stuff", "son", "name", "child", "course", "game", "doctor", "dollar", "dog", "sir", "honey", "head", "movie", "hour", "mother", "word", "father", "story", "part", "lady", "number", "morning", "tomorrow", "phone", "eye", "wife", "book", "dinner", "hand", "television", "town", "date", "office", "food", "news", "business", "couple", "door", "parent", "month", "deal", "brother", "work", "other", "ball", "line", "heart", "class", "picture", "side", "love", "mind", "hair", "wedding", "reason", "look", "bed", "paper", "face"];
    $words_adjective = ["good", "right", "little", "okay", "great", "sorry", "big", "sure", "bad", "nice", "new", "fine", "old", "other", "wrong", "late", "real", "happy", "whole", "stupid", "pretty", "own", "funny", "hard", "cool", "crazy", "hot", "same", "ready", "next", "dead", "beautiful", "true", "sweet", "high", "only", "easy", "perfect", "free"];
    $words_interjection = ["oh", "hey", "uh", "right", "hmm", "huh", "wow", "ah", "whoa", "aw", "ha", "damn"];

    $word_part = ["func", "verb", "advb", "noun", "adjc", "intj"];

    function make_sentence(){
        global $words_func, $words_verb, $words_adverb, $words_noun, $words_adjective, $words_interjection, $word_part;
        $sentence_parts = array();
        $sentence_word_parts = array();
        $sentence = "";

        $word_count = rand(2, 30);

        for($k = 0; $k < $word_count; $k++){
            if($k>0){
                $x = rand(0,99);
                switch($sentence_word_parts[$k-1]){
                    case "func":
                        if($x >= 0 && $x < 30){
                            $sentence_word_parts[$k] = "verb";
                        }else if($x >= 30 && $x < 40){
                            $sentence_word_parts[$k] = "advb";
                        }else if($x >= 40 && $x < 70){
                            $sentence_word_parts[$k] = "noun";
                        }else if($x >= 70 && $x < 90){
                            $sentence_word_parts[$k] = "adjc";
                        }else if($x >= 90 && $x < 100){
                            $sentence_word_parts[$k] = "intj";
                        }
                        break;
                    case "verb":
                        if($x >= 0 && $x < 10){
                            $sentence_word_parts[$k] = "func";
                        }else if($x >= 10 && $x < 40){
                            $sentence_word_parts[$k] = "advb";
                        }else if($x >= 40 && $x < 80){
                            $sentence_word_parts[$k] = "noun";
                        }else if($x >= 80 && $x < 90){
                            $sentence_word_parts[$k] = "adjc";
                        }else if($x >= 90 && $x < 100){
                            $sentence_word_parts[$k] = "intj";
                        }
                        break;
                    case "advb":
                        if($x >= 0 && $x < 10){
                            $sentence_word_parts[$k] = "func";
                        }else if($x >= 10 && $x < 30){
                            $sentence_word_parts[$k] = "verb";
                        }else if($x >= 30 && $x < 60){
                            $sentence_word_parts[$k] = "noun";
                        }else if($x >= 60 && $x < 80){
                            $sentence_word_parts[$k] = "adjc";
                        }else if($x >= 80 && $x < 100){
                            $sentence_word_parts[$k] = "intj";
                        }
                        break;
                    case "noun":
                        if($x >= 0 && $x < 30){
                            $sentence_word_parts[$k] = "func";
                        }else if($x >= 30 && $x < 70){
                            $sentence_word_parts[$k] = "verb";
                        }else if($x >= 70 && $x < 80){
                            $sentence_word_parts[$k] = "advb";
                        }else if($x >= 80 && $x < 90){
                            $sentence_word_parts[$k] = "adjc";
                        }else if($x >= 90 && $x < 100){
                            $sentence_word_parts[$k] = "intj";
                        }
                        break;
                    case "adjc":
                        if($x >= 0 && $x < 20){
                            $sentence_word_parts[$k] = "func";
                        }else if($x >= 20 && $x < 40){
                            $sentence_word_parts[$k] = "verb";
                        }else if($x >= 40 && $x < 60){
                            $sentence_word_parts[$k] = "advb";
                        }else if($x >= 60 && $x < 90){
                            $sentence_word_parts[$k] = "noun";
                        }else if($x >= 90 && $x < 100){
                            $sentence_word_parts[$k] = "intj";
                        }
                        break;
                    case "intj":
                        if($x >= 0 && $x < 30){
                            $sentence_word_parts[$k] = "func";
                        }else if($x >= 30 && $x < 40){
                            $sentence_word_parts[$k] = "verb";
                        }else if($x >= 40 && $x < 60){
                            $sentence_word_parts[$k] = "advb";
                        }else if($x >= 60 && $x < 90){
                            $sentence_word_parts[$k] = "noun";
                        }else if($x >= 90 && $x < 100){
                            $sentence_word_parts[$k] = "adjc";
                        }
                        break;
                }
            }else{
                $chosen_word_part = $word_part[rand(0,sizeof($word_part)-1)];
                $sentence_word_parts[$k] = $chosen_word_part;
            }
        }
        foreach($sentence_word_parts as $part){
            switch($part){
                case "func":
                    $sentence_parts[] = $words_func[rand(0,sizeof($words_func)-1)];
                    break;
                case "verb":
                    $sentence_parts[] = $words_verb[rand(0,sizeof($words_verb)-1)];
                    break;
                case "advb":
                    $sentence_parts[] = $words_adverb[rand(0,sizeof($words_adverb)-1)];
                    break;
                case "noun":
                    $sentence_parts[] = $words_noun[rand(0,sizeof($words_noun)-1)];
                    break;
                case "adjc":
                    $sentence_parts[] = $words_adjective[rand(0,sizeof($words_adjective)-1)];
                    break;
                case "intj":
                    $sentence_parts[] = $words_interjection[rand(0,sizeof($words_interjection)-1)];
                    break;
            }
        }
        for($l=0;$l<sizeof($sentence_parts);$l++){
            if($l == 0){
                $sentence .= ucfirst($sentence_parts[$l]);
            }else if($l == sizeof($sentence_parts)-1){
                $sentence .= " " . $sentence_parts[$l] . ".";
            }else{
                $comma_rand = rand(0,3);
                if($comma_rand == 0){
                    $sentence .= ",";
                }
                $sentence .= " " . $sentence_parts[$l];
            }
        }
        return($sentence);
    }

    function write_paragraph(){
        $paragraph = "";
        $spp = rand(5,25); //sentences per paragraph
        for($m = 0; $m < $spp; $m++){
            $paragraph .= make_sentence() . " ";
        }
        return($paragraph);
    }

    function create_book(){
        global $ver;
        $title = "\"" . substr(strtoupper(make_sentence()), 0, -1) . "\"";
        $sys_info = "GENERATED WITH COWRITER\nCake Co® CoWriter™ Generator version: $ver";
        $book = "";
        $book_chapters = rand(5,50);
        $chapter_paragraphs = rand(5,50);
        $book .= "$sys_info\n\n          $title\n\n\n";
        for($n = 0; $n < $book_chapters; $n++){
            $chapter = "";
            $book .= "\n\n      CHAPTER " . $n + 1 . "\n\n";
            for($o = 0; $o < $chapter_paragraphs; $o++){
                $chapter .= "  " . write_paragraph() . "\n\n";
            }
            $book .= $chapter;
        }
        return $book;
    }

    function create_files($num_files){
        global $dir;
        print("Attempting to create $num_files files.<hr>");
        $start = time();
        for($i=0;$i<$num_files;$i++){
            $uid = "";
            for($j=0;$j<7;$j++){
                $uid .= rand(0,9);
            }
            $fn = date("Y-m-d_H-i-s_").$uid;
            if(file_exists("$dir/$fn.txt")){print(microtime()." | <span style='color:red'>Skipped creation of duplicate file $fn.txt</span><br>"); continue;}
            touch("$dir/$fn.txt");
            $created_file = fopen("$dir/$fn.txt", "w+");
            fwrite($created_file, create_book());
            fclose($created_file);
            print(microtime()." | Successfully created file $fn.txt (File #" . $i+1 . " of session)<br>");
        }
        print("<hr>Created $num_files in " . time() - $start . " seconds.");
    }

    create_files(1);
?>