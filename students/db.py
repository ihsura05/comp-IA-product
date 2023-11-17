import pymongo
 
 
client = pymongo.MongoClient("mongodb+srv://goarushi:9gPQs3t4UJGgyl1p@comp-ia.pskcjeh.mongodb.net/")
 
# Database Name
db = client["Comp-IA"]
 
# Collection Name
col = db["Students"]
 
x = col.find({},{'_id': 0, 'name': 1})
for data in x:
      print(data['name'])
 

# from jinja2 import Environment, FileSystemLoader

# # Create a Jinja2 environment and load the template
# env = Environment(loader=FileSystemLoader('.'))
# template = env.get_template('students.html')

# # Example data
# name = "Hello"

# # Render the template with the data
# rendered_template = template.render(name=name)

# # Print or save the rendered HTML
# print(rendered_template)



from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    # for data in x:
        name = "Hello"

        # Passing variables to the template
        return render_template('students.html', name=name)

if __name__ == '__main__':
    app.run(debug=True)