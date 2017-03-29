#############
# Variables #
#############

# Messaging

MSG = echo -e $(MSG_PREFIX)
MSG_ERROR = $(MSG) $(MSG_COL_RED)[ERROR]$(MSG_COL_NC)
MSG_SUCCESS = $(MSG) $(MSG_COL_GREEN)[SUCCESS]$(MSG_COL_NC)
MSG_COL_RED = '\033[0;31m'
MSG_COL_GREEN = '\033[0;32m'
MSG_COL_NC = '\033[0m'
MSG_PREFIX = "Making... [$@] -"

# CSS Compilation

# Sass compiler & flags
SASS_C = sassc 
SASS_C_FLAGS =

# Sass directory and file designation
SASS_SOURCE_DIR = src/sass/
SASS_MAIN = main.scss
SASS_SOURCES := $(shell find $(SASS_SOURCE_DIR) -name '*.scss')
SASS_SOURCEMAP_FLAG = -m
SASS_OUTPUT_FILE = resources/css/style.css

###########
# Recipes #
###########
#
# Usage: 
# 
#	- make css
# (PHONY) compile all the sass files within $SASS_SOURCE_DIR into $SASS_OUTPUT_FILE using $SASS_C as a sass-compiler
#
#	- make clean 
# (PHONY) remove all temporary files
#

# Css compilation

css: $(SASS_OUTPUT_FILE)

$(SASS_OUTPUT_FILE): $(SASS_SOURCE_DIR)$(SASS_MAIN) $(SASS_SOURCES)

# Back-up old file and check directory
	@$(MSG) "Checking if $(dir $(SASS_OUTPUT_FILE)) exists"
	@if [ ! -d $(dir $(SASS_OUTPUT_FILE)) ] ; then \
		$(MSG) "$(dir $(SASS_OUTPUT_FILE)) doesn't exist, creating now"; \
		mkdir $(dir $(SASS_OUTPUT_FILE)); \
	else \
		$(MSG) "$(dir $(SASS_OUTPUT_FILE)) exists!" ; \
	fi
	@if [ ! -f $(SASS_OUTPUT_FILE) ] ; then \
		$(MSG) "$(SASS_OUTPUT_FILE) doesn't exist"; \
	else \
		$(MSG) "Renaming old css file ($(SASS_OUTPUT_FILE) to $(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old)"; \
		mv $(SASS_OUTPUT_FILE) $(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old; \
	fi

# Compiling css file
	@$(MSG) "Building new css file ($(SASS_OUTPUT_FILE))"
	-@$(SASS_C)$(SASS_C_FLAGS) $(SASS_SOURCE_DIR)$(SASS_MAIN) $(SASS_OUTPUT_FILE); \

# Recovering or deleting back-up file 
	@if [ $$? -eq 0 ] ; then \
		$(MSG_SUCCESS) "Building new css file successful."; \
		if [ -f $(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old ] ; then \
			$(MSG) "Removing old css file ($(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old)"; \
			rm $(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old; \
		fi; \
	else \
		if [ -f $(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old] ; then \
			$(MSG_ERROR) "Building new css file failed, restoring old css file"; \
			mv $(dir $(SASS_OUTPUT_FILE)).$(notdir $(SASS_OUTPUT_FILE))_old $(SASS_OUTPUT_FILE); \
		fi; \
		exit 1; \
	fi
# /$(SASS_OUTPUT_FILE)


# Admin & Clean-up

clean:
	-@rm ./*~

.PHONY: clean css
