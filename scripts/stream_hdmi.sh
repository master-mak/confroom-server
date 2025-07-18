#!/bin/bash

ffmpeg \
  -f v4l2 -input_format mjpeg -video_size 1280x720 -i /dev/video2 \
  -f alsa -i hw:1 \
  -vcodec libx264 -preset veryfast -tune zerolatency -pix_fmt yuv420p -g 60 \
  -acodec aac -ar 44100 -ac 2 \
  -f hls -hls_time 2 -hls_list_size 5 -hls_flags delete_segments \
  /var/www/html/live/stream.m3u8
