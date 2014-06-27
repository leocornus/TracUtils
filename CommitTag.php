<?php
/**
 * The CommitTag class will provide all functions needed for the new  * commit tag.
 */
class CommitTag {

    /**
     * setup the <commit> parser hook.
     */
    public static function registerParserHook(&$parser) {
        $parser->setHook('commit', array('CommitTag', 'renderCommit'));
        return true;
    }

    /**
     * the callback function for registerParserHook,
     */
    public static function renderCommit($input, $args, $parser) {

        global $wgTracCommitLinkPattern;

        $id = htmlspecialchars($input);
        $link = str_replace('[COMMIT_ID]', $id,
                            $wgTracCommitLinkPattern);
        $ret = <<<EOT
<a href="{$link}">{$id}</a>
EOT;
        return $ret;
    }
}
