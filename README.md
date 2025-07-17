# Confroom-server

**Сервер для конференц-зала**: загрузка материалов и трансляция HDMI → планшеты.

## Установка

```bash
sudo apt update
sudo apt install nginx ffmpeg php libapache2-mod-php -y

# Копирование файлов
sudo cp html/* /var/www/html/
sudo mkdir -p /var/www/html/meetings /var/www/html/live
sudo chown -R www-data:www-data /var/www/html

sudo cp scripts/stream_hdmi.sh /usr/local/bin/
sudo chmod +x /usr/local/bin/stream_hdmi.sh

sudo cp scripts/stream_hdmi.service /etc/systemd/system/
sudo systemctl daemon-reexec
sudo systemctl enable --now stream_hdmi.service

exit
