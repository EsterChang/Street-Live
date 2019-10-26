import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

# Use the application default credentials
cred = credentials.ApplicationDefault()
firebase_admin.initialize_app(cred, {
  'projectId': 'hustle-d3f8e'
})

db = firestore.client()

users_ref = db.collection(u'Users')
docs = users_ref.stream()

# doc = db.document('Users/TE77uYKAk9pRc8vCPKuZ')
# print(doc.to_dict())

for doc in docs:
    print(u'{} => {}'.format(doc.id, doc.to_dict()))

# print(next(users))
# for user in users:
#     print(user)
# for user in users:
#     print(user.to_dict())