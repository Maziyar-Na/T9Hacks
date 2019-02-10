class our_system():
    def sign_up():
        #add user to database if it does not exist

    def login():
        #check for the user in database if it is ok redirect to search unless return give error message

    def search(self, product_name, count):
        #connect to db for searching products
        #retrieve products
        #go to page result and send products to that page2

class User():
    """docstring for MyUsers."""
    def __init__(self, full_name, user, phone_number, email, address, password, picture):
        self.full_name = name
        self.user = user
        self.phone_number = phone_number
        self.email = email
        self.address = address
        self.password = password
        self.picture = location




class farmerUser(MyUsers):
	def __init__(self, full_name, user, phone_number, email, address, password, picture, products):
        super().__init__(full_name, user, phone_number, email, address, password, picture)
		self.products = products

    def add_product(self, product):
        #insert product into the database
        #show some message if it is successful


class customerUser(MyUser):
    def __init__(self, full_name, user, phone_number, email, address, password, picture, products):
        super().__init__(full_name, user, phone_number, email, address, password, picture)

class product():
    def __init__(self, product_name , description, price, product_image):
        self.product_name = product_name
        self.description = description
        self.price = price
        self.product_image = product_image
    def like

    def show_product():
        #retrieve product some how from database
        #redirect to product page
