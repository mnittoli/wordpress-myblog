<div id="comments" class="comments-area">
&lt;?php if ( have_comments() ) : ?&gt;
    &lt;h2 class=&quot;comments-title&quot;&gt;
        &lt;?php
            printf( _nx( 'One thought on &amp;ldquo;%2$s&amp;rdquo;', '%1$s thoughts on &amp;ldquo;%2$s&amp;rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
                number_format_i18n( get_comments_number() ), '&lt;span&gt;' . get_the_title() . '&lt;/span&gt;' );
        ?&gt;
    &lt;/h2&gt;

    &lt;ol class=&quot;comment-list&quot;&gt;
        &lt;?php
            wp_list_comments( array(
                'style'       =&gt; 'ol',
                'short_ping'  =&gt; true,
                'avatar_size' =&gt; 74,
            ) );
        ?&gt;
    &lt;/ol&gt;&lt;!-- .comment-list --&gt;

    &lt;?php
        // Are there comments to navigate through?
        if ( get_comment_pages_count() &gt; 1 &amp;&amp; get_option( 'page_comments' ) ) :
    ?&gt;
    &lt;nav class=&quot;navigation comment-navigation&quot; role=&quot;navigation&quot;&gt;
        &lt;h1 class=&quot;screen-reader-text section-heading&quot;&gt;&lt;?php _e( 'Comment navigation', 'twentythirteen' ); ?&gt;&lt;/h1&gt;
        &lt;div class=&quot;nav-previous&quot;&gt;&lt;?php previous_comments_link( __( '&amp;larr; Older Comments', 'twentythirteen' ) ); ?&gt;&lt;/div&gt;
        &lt;div class=&quot;nav-next&quot;&gt;&lt;?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'twentythirteen' ) ); ?&gt;&lt;/div&gt;
    &lt;/nav&gt;&lt;!-- .comment-navigation --&gt;
    &lt;?php endif; // Check for comment navigation ?&gt;

    &lt;?php if ( ! comments_open() &amp;&amp; get_comments_number() ) : ?&gt;
    &lt;p class=&quot;no-comments&quot;&gt;&lt;?php _e( 'Comments are closed.' , 'twentythirteen' ); ?&gt;&lt;/p&gt;
    &lt;?php endif; ?&gt;

&lt;?php endif; // have_comments() ?&gt;

&lt;?php comment_form(); ?&gt;
</div><!-- #comments -->