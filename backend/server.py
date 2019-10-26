from flask import Flask, request
from flask_cors import CORS
app = Flask(__name__)
CORS(app)


@app.route('/profile_info')
def profile_info():
    user = request.args.get('id')
    return 'Hello, World!'

if __name__ == '__main__':
    app.run()