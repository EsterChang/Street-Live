import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

# Use a service account
cred = credentials.Certificate('serviceAccountKey.json')
firebase_admin.initialize_app(cred)

db = firestore.client()
doc_ref = db.collection(u'Streams')
users = doc_ref.stream()

print(doc_ref.get())
print(doc_ref.stream())
print(db.collections())

for collection in db.collections():
    print(collection)

# print(next(users))
# for user in users:
#     print(user)
# for user in users:
#     print(user.to_dict())