<?php
/**
 * The TicketTag class will provide all functions need for the 
 * new ticket tag.
 */
class TicketTag {

    /**
     * set up the <ticket> parser hook.
     */
    public static function registerParserHook(&$parser) {
        $parser->setHook('ticket', array('TicketTag', 'renderTicket'));
        return true;
    }

    /**
     * the callback function for registerParserHook,
     *
     */
    public static function renderTicket($input, $args, $parser) {

        $linkPattern = "http://trac.project.com/ticket?[TICKET_ID]";
        $id = htmlspecialchars($input);
        $link = str_replace('[TICKET_ID]', $id, $linkPattern);
        $ret = <<<EOT
<a href="{$link}">#{$id}</a>
EOT;
        return $ret;
    }
}
