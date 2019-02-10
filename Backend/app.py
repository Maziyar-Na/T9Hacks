from flask import Flask, request, render_template

app = Flask(__name__)


@app.route('/')
def home(name=None):
    return render_template("/Users/mana4323/Desktop/Project/T9Hacks/UI/html/farmer.html", name=name)

if __name__ == "__main__":
    app.run(host="localhost", port=5000, debug=True)
