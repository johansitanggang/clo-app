<?php

function cekLogin()
{
    // instansiasi ci
    $ci = get_instance();
    if (!($ci->session->userdata('nip_dosen'))) {
        redirect('auth');
    } else {
        // echo "berhasil cooyyyy!";
    }
}