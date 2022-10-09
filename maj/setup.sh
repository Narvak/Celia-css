SFUSER=1234
SFPASS=1234
SFGITCLONEPROJ=gitcloneproj

SFSERV=serv
SFPYTHON=python
SFPORT=8080
SFDIRECTORY=directory
SFBLIND=blind


if [ $1 == $SFUSER ] && [ $2 == $SFPASS ] && [ $3 == $SFGITCLONEPROJ]; then

chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py

echo "Telechargement du projet."
git clone https://github.com/Narvak/lib-crypto_css.git
echo "Le projet est telechargé."

elif [ $1 == $SFUSER ] && [ $2 == $SFPASS ] && [ $3 == $SFSERV ] && [ $4 == $SFPYTHON ] && [ $5 == $SFPORT ]; then
chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py
echo "WARNING if you haven't yet given the whole link to the file, do so."
echo "Server start"
python -m http.server 8080 --directory /home/
echo "The server is closed."

elif [ $1 == $SFUSER ] && [ $2 == $SFPASS ] && [ $3 == $SFSERV ] && [ $4 == $SFPYTHON ] && [ $5 == $SFPORT ]; then
chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py
echo "WARNING if you have not yet given the ip address, do so."
echo "Server start"
python -m http.server 8080 --blind
echo "The server is closed."

elif [ $1 != $SFUSER ] && [ $2 != $SFPASS ]; then
chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py

echo "ERROR 13"
echo "This error is related to either your username or your password."

elif [ $1 != $SFUSER ] && [ $2 != $SFPASS ] && [ $3 != $SFGITCLONEPROJ] && [ $3 != $SFSERV ] && [ $4 != $SFPYTHON ] && [ $5 != $SFPORT ]; then
chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py

echo "ERROR 42"
echo "This error is related either to your username, to your password, or to the other arguments."



fi