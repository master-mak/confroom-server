#!/bin/bash

ffmpeg \
  -f v4l2 -input_format mjpeg -video_size 1280x720 -framerate 5 -i /dev/video2 \
  -f alsa -i hw:1 \
  -vcodec libx264 -preset veryfast -tune stillimage -crf 23 -pix_fmt yuv420p \
  -acodec aac -ar 44100 -ac 2 \
  -f hls \
  -hls_time 2 \
  -hls_list_size 4 \
  -hls_flags delete_segments+append_list+omit_endlist \
  /var/www/html/live/stream.m3u8
