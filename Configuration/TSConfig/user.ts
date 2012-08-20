options {
	clearCache {
		pages = 1
		all = 1
	}

	saveDocNew = 1

	# don't clear clipboard
	saveClipboard = 1

	# Reduces the amount of clipboards from 4 to X:
	clipboardNumberPads = 2

	shortcutFrame = 1
	
	# Enable upload field
	uploadFieldsInTopOfEB = 1

	# Enable folder create
	createFoldersInEB = 1

	## Set the default spelling ability of the check speller for all users
	## options: ultra, fast, normal, bad-spellers
	HTMLAreaPspellMode = normal

	## Enable the personal dictionary feature of the check speller by default for all users
	enablePersonalDicts = 1

	# show pageID in page tree title
	pageTree.showPageIdWithTitle = 0

	# show navigation title in page tree if any
	pageTree.showNavTitle = 1

	# options.contextMenu.pageTree.disableItems = history,edit_access,move_wizard,new_wizard,db_list,tx_impexp_clickmenu,info,perms, versioning

	options.RTEkeyList = *
	# options.RTEkeyList = formatblock, bold, italic, orderedlist, unorderedlist, outdent, indent, link, unlink, blockstylelabel, blockstyle, textstylelabel, textstyle
}

mod {
	web_list {
		# Hide static_info_tables records on the rootpage
		hideTables = static_template,static_countries,static_country_zones,static_currencies,static_languages,static_territories,static_taxes,static_markets
	}

	wizards {
		# http://typo3.org/documentation/document-library/core-documentation/doc_core_tsconfig/4.3.2/view/1/5/#id2505051
		# http://buzz.typo3.org/people/steffen-kamper/article/the-new-content-element-wizard-in-version-43/
		newContentElement {
			renderMode = tabs

			wizardItems {
				common {
					elements {
						header {
							icon = gfx/c_wiz/regular_header.gif
							title = Header
							description = A simple header.
							tt_content_defValues {
								CType = header
							}
						}
					}

					# original: text,textpic,image,bullets,table
					show := addToList(header)

					#--------------------------------------
					# show only those elements, rest is possible via RTE
					#--------------------------------------
					show := removeFromList(text,image,bullets,table)
				}

				plugins {
					show =
				}

				special {
					# original: uploads,media,menu,html,div
					show := removeFromList(uploads,div)
				}
			}
		}
	}
}