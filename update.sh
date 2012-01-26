#!/usr/bin/env sh
# very quick and dirrrty updatescript
echo "Update started"

git clone https://github.com/bastianallgeier/kirbycms.git &&
  rm -rf kirby &&
  mv kirbycms/kirby . &&
  rm -rf kirbycms

echo "Update finished"