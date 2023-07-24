<?php if(have_rows('redes','option')): while(have_rows('redes','option')): the_row(); ?>
<li>
    <a href="<?php echo get_sub_field('facebook')?>" data-media="facebook" target="_blank" title="Facebook">
        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <rect x="0" fill="none" width="20" height="20"/>
            <g><path d="M8.46 18h2.93v-7.3h2.45l.37-2.84h-2.82V6.04c0-.82.23-1.38 1.41-1.38h1.51V2.11c-.26-.03-1.15-.11-2.19-.11-2.18 0-3.66 1.33-3.66 3.76v2.1H6v2.84h2.46V18z" fill="black"/></g>
        </svg>
    </a>
</li>
<li>
    <a href="<?php echo get_sub_field('instagram')?>" data-media="instagram" target="_blank" title="Instagram">
        <svg viewBox="0 0 24 24" fill="#3333CC" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C9.284 2 8.944 2.01133 7.87733 2.06C6.81267 2.10867 6.08533 2.278 5.44933 2.52533C4.78267 2.776 4.178 3.16933 3.678 3.67867C3.16948 4.17809 2.77591 4.78233 2.52467 5.44933C2.27867 6.08533 2.10867 6.81333 2.06 7.878C2.012 8.944 2 9.28333 2 12C2 14.7167 2.01133 15.056 2.06 16.1227C2.10867 17.1873 2.278 17.9147 2.52533 18.5507C2.776 19.2173 3.16933 19.822 3.67867 20.322C4.1781 20.8305 4.78234 21.2241 5.44933 21.4753C6.08533 21.722 6.81267 21.8913 7.87733 21.94C8.944 21.9887 9.284 22 12 22C14.716 22 15.056 21.9887 16.1227 21.94C17.1873 21.8913 17.9147 21.722 18.5507 21.4747C19.2173 21.224 19.822 20.8307 20.322 20.3213C20.8305 19.8219 21.2241 19.2177 21.4753 18.5507C21.722 17.9147 21.8913 17.1873 21.94 16.1227C21.9887 15.056 22 14.716 22 12C22 9.284 21.9887 8.944 21.94 7.87733C21.8913 6.81267 21.722 6.08533 21.4747 5.44933C21.2236 4.78204 20.83 4.17755 20.3213 3.678C19.8219 3.16948 19.2177 2.77591 18.5507 2.52467C17.9147 2.27867 17.1867 2.10867 16.122 2.06C15.056 2.012 14.7167 2 12 2ZM12 3.802C14.67 3.802 14.9867 3.812 16.0413 3.86C17.016 3.90467 17.5453 4.06667 17.898 4.20467C18.3647 4.38533 18.698 4.60267 19.048 4.952C19.398 5.302 19.6147 5.63533 19.7953 6.102C19.9327 6.45467 20.0953 6.984 20.14 7.95867C20.188 9.01333 20.198 9.33 20.198 12C20.198 14.67 20.188 14.9867 20.14 16.0413C20.0953 17.016 19.9333 17.5453 19.7953 17.898C19.6353 18.3324 19.3799 18.7253 19.048 19.048C18.7254 19.38 18.3324 19.6354 17.898 19.7953C17.5453 19.9327 17.016 20.0953 16.0413 20.14C14.9867 20.188 14.6707 20.198 12 20.198C9.32933 20.198 9.01333 20.188 7.95867 20.14C6.984 20.0953 6.45467 19.9333 6.102 19.7953C5.66764 19.6353 5.27467 19.3799 4.952 19.048C4.62012 18.7253 4.36475 18.3323 4.20467 17.898C4.06733 17.5453 3.90467 17.016 3.86 16.0413C3.812 14.9867 3.802 14.67 3.802 12C3.802 9.33 3.812 9.01333 3.86 7.95867C3.90467 6.984 4.06667 6.45467 4.20467 6.102C4.38533 5.63533 4.60267 5.302 4.952 4.952C5.27463 4.62003 5.66761 4.36465 6.102 4.20467C6.45467 4.06733 6.984 3.90467 7.95867 3.86C9.01333 3.812 9.33 3.802 12 3.802Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 15.3367C11.5618 15.3367 11.128 15.2504 10.7231 15.0827C10.3183 14.915 9.95047 14.6692 9.64064 14.3594C9.3308 14.0495 9.08502 13.6817 8.91734 13.2769C8.74965 12.8721 8.66335 12.4382 8.66335 12C8.66335 11.5618 8.74965 11.1279 8.91734 10.7231C9.08502 10.3183 9.3308 9.95046 9.64064 9.64062C9.95047 9.33078 10.3183 9.08501 10.7231 8.91732C11.128 8.74964 11.5618 8.66333 12 8.66333C12.885 8.66333 13.7336 9.01487 14.3594 9.64062C14.9851 10.2664 15.3367 11.1151 15.3367 12C15.3367 12.8849 14.9851 13.7336 14.3594 14.3594C13.7336 14.9851 12.885 15.3367 12 15.3367ZM12 6.86C10.6368 6.86 9.32942 7.40153 8.36549 8.36547C7.40155 9.32941 6.86002 10.6368 6.86002 12C6.86002 13.3632 7.40155 14.6706 8.36549 15.6345C9.32942 16.5985 10.6368 17.14 12 17.14C13.3632 17.14 14.6706 16.5985 15.6345 15.6345C16.5985 14.6706 17.14 13.3632 17.14 12C17.14 10.6368 16.5985 9.32941 15.6345 8.36547C14.6706 7.40153 13.3632 6.86 12 6.86ZM18.6353 6.76667C18.6353 7.0889 18.5073 7.39794 18.2795 7.6258C18.0516 7.85366 17.7426 7.98167 17.4204 7.98167C17.0981 7.98167 16.7891 7.85366 16.5612 7.6258C16.3334 7.39794 16.2053 7.0889 16.2053 6.76667C16.2053 6.44443 16.3334 6.13539 16.5612 5.90753C16.7891 5.67968 17.0981 5.55167 17.4204 5.55167C17.7426 5.55167 18.0516 5.67968 18.2795 5.90753C18.5073 6.13539 18.6353 6.44443 18.6353 6.76667Z" fill="black"/>
        </svg>
    </a>
</li>
<li>
    <a href="<?php echo get_sub_field('linkedin')?>" data-media="linkedin" target="_blank" title="LinkedIn">
        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <rect x="0" fill="none" width="20" height="20"/>
            <g><path d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z" fill="black"/></g>
        </svg>
    </a>
</li>
<li>
    <a href="<?php echo get_sub_field('tiktok')?>" data-media="tiktok" target="_blank" title="TikTok">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.8218 5.1344C16.0887 4.29394 15.648 3.19805 15.648 2H14.7293C14.9659 3.3095 15.7454 4.43326 16.8218 5.1344Z" fill="#000000"/>
            <path d="M8.3218 11.9048C6.73038 11.9048 5.43591 13.2004 5.43591 14.7931C5.43591 15.903 6.06691 16.8688 6.98556 17.3517C6.64223 16.8781 6.43808 16.2977 6.43808 15.6661C6.43808 14.0734 7.73255 12.7778 9.324 12.7778C9.62093 12.7778 9.90856 12.8288 10.1777 12.9124V9.40192C9.89927 9.36473 9.61628 9.34149 9.324 9.34149C9.27294 9.34149 9.22654 9.34614 9.1755 9.34614V12.0394C8.90176 11.9558 8.61873 11.9048 8.3218 11.9048Z" fill="#000000"/>
            <path d="M19.4245 6.67608V9.34614C17.6429 9.34614 15.9912 8.77501 14.6456 7.80911V14.7977C14.6456 18.2851 11.8108 21.127 8.32172 21.127C6.97621 21.127 5.7235 20.6998 4.69812 19.98C5.8534 21.2198 7.50049 22 9.32392 22C12.8083 22 15.6478 19.1627 15.6478 15.6707V8.68211C16.9933 9.64801 18.645 10.2191 20.4267 10.2191V6.78293C20.0787 6.78293 19.7446 6.74574 19.4245 6.67608Z" fill="#000000"/>
            <path d="M14.6456 14.7977V7.80911C15.9912 8.77501 17.6429 9.34614 19.4245 9.34614V6.67608C18.3945 6.45788 17.4899 5.90063 16.8218 5.1344C15.7454 4.43326 14.9704 3.3095 14.7245 2H12.2098L12.2051 15.7775C12.1495 17.3192 10.8782 18.5591 9.32393 18.5591C8.35884 18.5591 7.50977 18.0808 6.98085 17.3564C6.06219 16.8688 5.4312 15.9076 5.4312 14.7977C5.4312 13.205 6.72567 11.9094 8.31708 11.9094C8.61402 11.9094 8.90168 11.9605 9.17079 12.0441V9.35079C5.75598 9.42509 3 12.2298 3 15.6707C3 17.3331 3.64492 18.847 4.69812 19.98C5.7235 20.6998 6.97621 21.127 8.32172 21.127C11.8061 21.127 14.6456 18.2851 14.6456 14.7977Z" fill="black"/>
        </svg>
    </a>
</li>
<?php endwhile;endif; ?>